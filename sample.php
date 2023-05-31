<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sample.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body>
    
<h1>This is a table</h1>
<table>
    <thead>
      <tr>
        <th>Image</th>
        <th>Text</th>
        <th>Document</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody id="table-body">
      <tr>
        <td><img src="img.jpg" alt="example image" width="80px"> </td>
        <td>Example text</td>
        <td><a href="example.pdf">Example document</a></td>
        <td><button class="delete-row-btn"><i class="fa fa-trash"></i></button></td>
    </tr>
  </tbody>
</table>

<script>
  const deleteRowBtn = document.querySelectorAll('.delete-row-btn');
  deleteRowBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const row = btn.closest('tr');
      row.remove();
    });
  });
</script>

</body>
</html>

<script>
  const deleteRowBtns = document.querySelectorAll('.delete-row-btn');
  deleteRowBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const row = btn.closest('tr');
      row.remove();
    });
  });
</script>
      </tr>
    </tbody>
  </table>

</body>
</html>