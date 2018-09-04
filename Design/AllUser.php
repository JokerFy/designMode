<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/8/24
 * Time: 10:16
 */

namespace Design;


class AllUser implements \Iterator
{

    protected $ids;
    protected $index;
    protected $data = array();

    public function __construct()
    {
        $db = Factory::getDatabase();
        $result = $db->query("select id from user");
        $this->ids = $result->fetch_all(MYSQLI_ASSOC);
    }

    public function current()
    {
        // TODO: Implement current() method.
        $id=$this->ids[$this->index]['id'];
        return Factory::getUser($id);
    }

    /**
     *验证下一个元素
     */
    public function next()
    {
        // TODO: Implement next() method.
        $this->index++;
    }

    /**
     *验证是否还有下一个元素
     */
    public function valid()
    {
        // TODO: Implement valid() method.
        return $this->index < count($this->ids);
    }

    /**
     * 重置迭代器
     */
    public function rewind()
    {
        // TODO: Implement rewind() method.
        $this->index = 0;
    }

    /**
     *在迭代器中的位置
     */
    public function key()
    {
        // TODO: Implement key() method.
        return $this->index;
    }
}