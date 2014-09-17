<?php
    $role = $this->input->post('signup-select');
    
    if($role === "user") 
    {
        echo "<h2> Welcome User:".$this->input->post('name')."</h2>";
    }
    else
    {
        echo "<h4>Webmaster:".$this->input->post('name')."</h4>";
?>

    <p>Here is your code snippet</p>
    
    <div>

        Html:
        <pre>&lt;span class="viewpal"&gt;&lt;/span&gt;</pre>   
    </div>
    
    <div>
        Javascript:
        <pre>
            &lt;script type="javascript"&gt;
                $token = <?php echo $this->input->post('url')?>; /*This is your unique id, please don't change it.**/
            &lt;/script&gt;
        </pre>   
    </div>

    


<?php        

        echo "</p>";
    }
