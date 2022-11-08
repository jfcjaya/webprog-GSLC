<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No. </th>
      <th scope="col">Keterangan</th>
      <th scope="col">Harga</th>
    </tr>
  </thead>
  <tbody>
    <?php $index = 0; ?>
    @forelse ($data as $name => $val)
        <tr>
            <th scope="row">{{++$index}}</th>
            <td>{{$name}}</td>
            <td>{{$val}}</td>
        </tr>
    @empty
        <td colspan="3" class="text-center">No Data</td>
    @endforelse
  </tbody>
</table>