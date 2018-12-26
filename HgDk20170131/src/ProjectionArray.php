<?php
namespace Hg\Dk20170131;


class ProjectionArray implements Target
{
    /**
     * @var array
     */
    private $data;
    /**
     * @var array|int[]
     */
    private $targetIndex;

    /**
     * @param array $data
     * @param array $targetIndex
     */
    public function __construct(array &$data, array $targetIndex)
    {
        $this->data = &$data;
        $this->targetIndex = $targetIndex;
    }

    public function getValues() :array
    {
        $ret = [];
        foreach ($this->targetIndex as $index) {
            $ret[] = $this->data[$index];
        }

        return $ret;
    }

    public function setValues(array $values)
    {
        foreach ($this->targetIndex as $i => $index) {
            $this->data[$index] = $values[$i];
        }
    }
}
