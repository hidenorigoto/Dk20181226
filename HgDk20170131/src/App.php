<?php
namespace Hg\Dk20170131;

class App
{
    /**
     * @var array|\Closure[]
     */
    private $commands;

    public function __construct()
    {
        $rotation = new Rotaion();
        $this->commands = [
            'a' => function ($data) use ($rotation) {
                $target = new ProjectionArray($data, [0,1,2]);
                $rotation($target);
                return $data;
            },
            'b' => function ($data) use ($rotation) {
                $target = new ProjectionArray($data, [3,4,5]);
                $rotation($target);
                return $data;
            },
            'c' => function ($data) use ($rotation) {
                $target = new ProjectionArray($data, [6,7,8]);
                $rotation($target);
                return $data;
            },
            'd' => function ($data) use ($rotation) {
                $target = new ProjectionArray($data, [6,3,0]);
                $rotation($target);
                return $data;
            },
            'e' => function ($data) use ($rotation) {
                $target = new ProjectionArray($data, [7,4,1]);
                $rotation($target);
                return $data;
            },
            'f' => function ($data) use ($rotation) {
                $target = new ProjectionArray($data, [8,5,2]);
                $rotation($target);
                return $data;
            },
            'g' => function ($data) use ($rotation) {
                $target = new ProjectionArray($data, [8,7,6]);
                $rotation($target);
                return $data;
            },
            'h' => function ($data) use ($rotation) {
                $target = new ProjectionArray($data, [5,4,3]);
                $rotation($target);
                return $data;
            },
            'i' => function ($data) use ($rotation) {
                $target = new ProjectionArray($data, [2,1,0]);
                $rotation($target);
                return $data;
            },
            'j' => function ($data) use ($rotation) {
                $target = new ProjectionArray($data, [2,5,8]);
                $rotation($target);
                return $data;
            },
            'k' => function ($data) use ($rotation) {
                $target = new ProjectionArray($data, [1,4,7]);
                $rotation($target);
                return $data;
            },
            'l' => function ($data) use ($rotation) {
                $target = new ProjectionArray($data, [0,3,6]);
                $rotation($target);
                return $data;
            },
        ];
    }

    public function solve(string $input):string
    {
        $data = [1,2,3,4,5,6,7,8,9];
        foreach (str_split($input) as $char) {
            $command = $this->commands[$char];
            $data = $command($data);
        }

        return implode('/', array_map(function ($arr) {
            return implode('', $arr);
        }, array_chunk($data, 3)));
    }
}
