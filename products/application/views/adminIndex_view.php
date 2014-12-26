<div class="head">
    My products
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
        <?php
        for($i=0;$i<count($data['books']);$i++){
            echo "<tr>";
            echo "<td>".$data['books'][$i]['name']."</td>";
            echo "<td>".$data['books'][$i]['price']."</td>";
            echo "<td>".$data['books'][$i]['description']."</td>";
            echo "</tr>";
        }
        ?>
    </table>
