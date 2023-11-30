<?php require_once('../../private/initialize.php');
$salamander_set = find_all_salamanders();
var_dump($salamander_set);

$salamanders = [
  ['id' => '1', 'salamanderName' => 'Red-Legged Salamander'],
  ['id' => '2', 'salamanderName' => 'Pigeon Mountain Salamander'],
  ['id' => '3', 'salamanderName' => 'ZigZag Salamander'],
  ['id' => '4', 'salamanderName' => 'Slimy Salamander'],
];

include(SHARED_PATH . '/salamander-header.php');
$page_title = "-";
if(!isset($page_title)) {$page_title = 'Salamanders';}
?>

<h1>Salamanders</h1>
<a href="new.php">Create Salamander</a>

<table class="list">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>

      <?php while($salamander = mysqli_fetch_assoc($salamander_set)) { ?>
        <tr>
          <td><?= h($salamander['id']) ?></td>
    	    <td><?= h($salamander['salamanderName']) ?></td>
          <td><?= h($salamander['description']) ?></td>
          <td><?= h($salamander['habitat']) ?></td>
          <td><a href="<?= h(u('show.php?id=' . h(u($salamander['id'])))); ?>">View</a></td>
          <td><a href="<?= h(u('edit.php?id=' . h(u($salamander['id'])))); ?>">Edit</a></td>
          <td><a href="<?= h(u('delete.php?id=' . h(u($salamander['id'])))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>
<?php include_once(SHARED_PATH . '/salamander-footer.php'); ?>