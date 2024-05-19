<?php

interface Transport
{
    public function move();

    public function stop();
}

interface Overland extends Transport
{
    public function highpass();
}

class Car implements Overland
{

    public function move()
    {
        // TODO: Implement move() method.
    }

    public function stop()
    {
        // TODO: Implement stop() method.
    }

    public function highpass()
    {
        // TODO: Implement highpass() method.
    }
}