<h2>Data mahasiswa Fakultas {{ $fk }}</h2>

<ul>
    @foreach ($mhs as $row)
    <li> <?php echo $row ?> </li>
    @endforeach
</ul>
