<?php


namespace Liutao\Structure;


class LinkedList
{
    private $head;
    private $length;

    /**
     * @param string|null $data
     * @return bool
     * complexity O(n)
     */
    public function insert($data = null)
    {
        $newNode = new ListNode($data);

        if ($this->head === null) {
            $this->head = &$newNode;
        } else {
            $currentNode = $this->head;
            while ($currentNode->next !== null) {
                $currentNode = $currentNode->next;
            }

            $currentNode->next = $newNode;
        }

        $this->length++;
        return true;
    }

    /**
     * @param string $data
     * @return bool|ListNode
     * complexity O(n)
     */
    public function search( $data)
    {
        if ($this->length > 0) {
            $currentNode = $this->head;
            while ($currentNode !== null) {
                if ($currentNode->data === $data) {
                    return $currentNode;
                }

                $currentNode = $currentNode->next;
            }
        }

        return false;
    }
}