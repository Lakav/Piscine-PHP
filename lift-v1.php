<?php

function getFloor(int $currentFloor, int|null $requestFloor, array $buttons): int|null
{
    if ($requestFloor == 0 || $buttons == 0) {
        return null;
    }
    if ($currentFloor == 0){
        return null;
    }
    if (count($buttons) > 0){
        $nearest = $buttons[0];
        foreach ($buttons as $floor) {
            if (abs($nearest - $requestFloor) < abs($nearest - $currentFloor)) {
                return $nearest = $floor;
            }
        }
        return $requestFloor;
    }
    return null;
}

function getDirection(int $currentFloor, int|null $requestFloor, array $buttons): int
{

}

?>