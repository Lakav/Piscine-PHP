<?php

function getFloor(int $currentFloor, int|null $requestFloor, array $buttons): int|null
{
    if ($requestFloor == null && count($buttons) == 0) {
        return null;
    }
    if ($requestFloor != null){
        return $requestFloor;
    }
    if (count($buttons) > 0){
        $nearest = $buttons[0];
        foreach ($buttons as $floor) {
            if (abs($currentFloor - $floor) < abs($currentFloor - $nearest)) {
                $nearest = $floor;
            }
        }
        return $nearest;
    }
    return $requestFloor;
}

function getDirection(int $currentFloor, int|null $requestFloor, array $buttons): int
{

}

?>