<div class="head">
    Add product
</div>
<div class="logout">
    <a href = "/admin/logout"> logout</a>
</div>

<div class="menu">
    <a href = "/admin/index"> my books  </a> |
    <a href = "/admin/add"> add book </a> |
    <a href = "/admin/users"> users books</a> |
</div>

<div class="_form">
    <form action="" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="number" name="price"></td>
            </tr>
            <tr>
                <td>Description</td>
                <td>
                   <textarea name="description">

                   </textarea>
                </td>
            </tr>
            <th colspan="3" style="text-align: right">
                <input type="submit" value="Add" name="btn"
                       style="width: 150px; height: 30px;">
            </th>
        </table>
    </form>
</div>