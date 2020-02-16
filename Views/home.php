<div align="center">
    <h1>lista</h1>

    <table border="1" width="50%">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
        <tr>
            <?php foreach ($users as $user) : ?>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['email']; ?></td>
            <?php endforeach; ?>
        </tr>
    </table>
</div>