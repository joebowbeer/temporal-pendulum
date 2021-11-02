import {
  defineQuery,
  defineSignal,
  setListener,
  Trigger,
} from "@temporalio/workflow";

export interface GameInfo {
  anchorX: number;
  anchorY: number;
  ballX: number;
  ballY: number;
  length: number;
  width: number;
  height: number;
  angle: number;
  angleAccel: number;
  angleVelocity: number;
  dt: number;
  speed: number;
};

export const getGameInfoQuery = defineQuery("getGameInfo");

export const updateGameInfoSignal = defineSignal<[GameInfo]>("updateGameInfo");

export const setupMoveSignal = defineSignal("setupMove");

export const moveSignal = defineSignal("move");

export const exitSignal = defineSignal("exit");

export async function pendulum(info: GameInfo): Promise<void> {
  const exited = new Trigger<void>();
  let gameInfo: GameInfo = info;

  setListener(getGameInfoQuery, () => gameInfo);

  setListener(updateGameInfoSignal, (info: GameInfo) => {
    gameInfo = info;
  });

  setListener(setupMoveSignal, () => {
    gameInfo.angleAccel = (-9.81 / gameInfo.length) * Math.sin(gameInfo.angle);
    gameInfo.angleVelocity += gameInfo.angleAccel * gameInfo.dt;
    gameInfo.angle += gameInfo.angleVelocity * gameInfo.dt;
  });

  setListener(moveSignal, () => {
    gameInfo.anchorX = gameInfo.width / 2;
    gameInfo.anchorY = gameInfo.height / 4;
    gameInfo.ballX = Math.floor(
      gameInfo.anchorX + Math.sin(gameInfo.angle) * gameInfo.length
    );
    gameInfo.ballY = Math.floor(
      gameInfo.anchorY + Math.cos(gameInfo.angle) * gameInfo.length
    );
  });

  setListener(exitSignal, () => {
    exited.resolve();
  });

  return await exited;
}

export { pendulum as PositionWorkflow };
