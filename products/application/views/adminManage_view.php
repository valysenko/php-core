<div class="head">
    Manage my products
</div>
<div class="logout">
    <a href = "/admin/logout"> logout</a>
</div>

<div class="menu">
    <a href = "/admin/index"> my books  </a> |
    <a href = "/admin/add"> add book </a> |
    <a href = "/admin/users"> users books</a> |
</div>


<table class="products">
    <tr>
        <th>
            Name
        </th>
        <th>
            Price
        </th>
        <th>
            Description
        </th>
    </tr>
    <form action="" method="post">
        <?php
        for($i=0;$i<count($data['books']);$i++){
            echo "<tr>";
            echo "<td><input type='text' name="."name.$i" ." value=".$data['books'][$i]['name']."/></td>";
            echo "<td><input type='number' name="."price.$i" ." value=".$data['books'][$i]['price']."/></td>";
            echo "<td><input type='text' name="."description.$i" . " value=".$data['books'][$i]['description']."/></td>";
            echo "<td><input type = 'submit' name ='action' value='Save'/></td>";
            echo "<td><input type = 'submit' name='action' value='Delete'/></td>";
            echo "</tr>";
        }   
        ?>
    </form>
</table>
