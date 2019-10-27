<table class='table'>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя</th>
            <th scope="col">Возраст</th>
            <th scope="col">Язык</th>
        </tr>
    </thead>

    <tbody>
      <?php foreach ($employes as $student) : ?>
        <tr>
            <th><?=$student['id']?></td>
            <td><?=$student['name']?></td>
            <td><?=$student['age']?></td>
            <td><?=$student['leng']?></td>
        </tr>
    <?php endforeach ?>
    </tbody>

</table>