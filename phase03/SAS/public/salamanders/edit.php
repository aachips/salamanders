<?php require_once('../../private/initialize.php');
    $test = $_GET['test'] ?? '';
    if($test == '404') 
        error_404();
    elseif($test == '500')
        error_500();
    elseif($test == 'redirect') 
        redirect_to(urlFor('/staff/pages/index.php'));
    else    
        echo 'No error'; 
        
    $page_title = 'Create Page';
    $salamanderName = $salamanders[$id];
    include(SHARED_PATH . '/salamander-header.php'); ?>

<div id="content">

<a href="<?php echo urlFor('/staff/subjects/index.php'); ?>" class="back-link"></a>
    <h1>Create Subject</h1>
    <form action="<?php echo urlFor('/staff/subjects/edit.php?id=' . h(u($id))); ?>" method="post">
    <dl>
        <dt>Salamander Name</dt>
        <dd><input type="text" name="salamanderName" value="<?= print "$salamanderName"; ?>"></dd>
    </dl>
    <dl>
        <dt>Position</dt>
        <dd><select name="position" id="">
            <option value="1">1</option>
        </select>
        </dd>
    </dl>
    <dl>
        <dt>Visible</dt>
        <dd>
            <input type="hidden" name="visible" value="0">
            <input type="checkbox" name="visible" value="1">
        </dd>
        <div id="operations">
            <input type="submit" value="Edit Subject">
        </div>
    </dl>


    </form>


</div>    

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>