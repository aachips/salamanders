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
    include(SHARED_PATH . '/salamander-header.php'); ?>

    <div id="content">

        <a href="<?php echo urlFor('../index.php'); ?>" class="back-link"></a>
        <h1>Create Page</h1>
        
        <form action="<?= urlFor('create.php');?>" method="post">
            <dl>
                <dt>Menu name</dt>
                <dd><input type="text" name="menu_name" value=""></dd>
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
                    <input type="submit" value="Create Page">
                </div>
            </dl>
        </form>


    </div>    

    <?php include(SHARED_PATH . '/salamander-footer.php'); ?>
