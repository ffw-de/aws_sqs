<?php
namespace Drupal\aws_sqs;

use Drupal\aws_sqs\Model\QueueItem;

/**
 * Class QueueItemWrapper.
 *
 * @package Drupal\aws_sqs
 */
class QueueItemWrapper {

  /**
   * @var \Drupal\aws_sqs\Model\QueueItem
   */
  protected $queueItem;

  /**
   * QueueItemWrapper constructor.
   *
   * @param \Drupal\aws_sqs\Model\QueueItem $queueItem
   *   The queue item to wrap.
   */
  public function __construct(QueueItem $queueItem) {
    $this->queueItem = $queueItem;
  }

  /**
   * Getter for the queueItem.
   *
   * @return \Drupal\aws_sqs\Model\QueueItem
   */
  public function getQueueItem() {
    return $this->queueItem;
  }

  /**
   * Magic __get function to provide the data and the item id.
   *
   * @param $name
   *   The name of the member variable requested.
   *
   * @return mixed|string
   *   Value or null.
   */
  public function __get($name) {
    if ($name === 'data') {
      return $this->queueItem->getData();
    }
    if ($name === 'item_id') {
      return $this->queueItem->getItemId();
    }
  }

  /**
   * Magic __set function to set data or the item id.
   *
   * @param $name
   *   The name of the member variable to set.
   * @param $value
   *   The value to set.
   */
  public function __set($name, $value) {
    if ($name === 'data') {
      $this->queueItem->setData($value);
    }
    if ($name === 'item_id') {
      $this->queueItem->setItemId($value);
    }
  }

}
