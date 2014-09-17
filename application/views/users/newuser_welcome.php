<?php
if(isset($_SESSION['username']))
{
    $part_url = "?username=".$_SESSION['username'];
?>
    

<div class='new-user-welcome'>
    <h3> welcome </h3>
    <a href='<?php echo base_url()."index.php/user/dashboard".$part_url?>'> got it, proceed to user dashboard >></a>
</div>

<?php }else {
    show_404();
}