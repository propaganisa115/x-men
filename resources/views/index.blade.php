@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <h1>X-MEN</h1>
        <p>
            Ini adalah X-MEN, ini adalah tentang para pahlawan pembela bumi.
        </p>
    </div>
    <div class="col-md-2"></div>

</div>

<hr class="hr100"/>

<!-- Daftar SuperHero Start -->


<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    Di bawah ini adalah Daftar orang-orang yang super hebat itu.<br/>
                    Kamu bisa mencari nama mereka melalui fasilitas pencarian di sebelah kanan.<br/>
                    Kita beruntung memiliki data-data mereka. Jangan sampai jatuh ke tangan musuh, ini akan mengubah dunia..
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h3>Daftar Superhero</h3>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                    <div id="container" class="inline">
                     <input type="text" id="search-posts" placeholder="Live Search Hero" class="form-control"/>
                   </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">

                    <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody id="dynamic-row">
                      <?php $no=0; ?>
                      @foreach($data as $item)
                      <?php $no++ ?>
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->jenisKelamin}}</td>
                        <td>
                            <a href="#details" id="detailsButton" class="btn btn-primary" >View Detail</a>
                            <button class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
<!-- Daftar SuperHero End -->

<hr class="hr100"/>

<!-- Detail SuperHero Start -->

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    Meng-klik "View Detail" di atas akan membawamu ke halaman detail di bawah ini.
                    Ini jika kamu mengklik data milik Wolverine.
                </div>
                <hr/>
            </div>
        </div>


        <div class="row" id="details" >
            <div class="col-md-8">
                <h3>Detail Superhero: Wolverine</h3>
            </div>
            <div class="col-md-4  text-right">
                <button class="btn btn-primary">Edit</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered" id="superheroTable">


                    <tr>
                        <td>ID</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>
                            <input type="text" class="form-control" id="namaSuperhero" >
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>
                            <select class="form-control">
                                <option value="p" selected>Laki-laki</option>
                                <option value="l" >Perempuan</option>
                            </select>
                        </td>
                    </tr>

                </table>

                <table class="table table-bordered">
                    <thead>
                    <th>No</th>
                    <th>Skill</th>
                    <th>
                        <button class="btn btn-primary btn-small">Tambah Skill</button>
                    </th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Bisa Sembuh Dengan Cepat</td>
                        <td>
                            <button class="btn btn-danger btn-small">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Mempunyai Cakar Yang Lebih Kuat Dari Baja</td>
                        <td>
                            <button class="btn btn-danger btn-small">Hapus</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
<!-- Detail SuperHero End-->
<!-- Script -->






























<hr class="hr100"/>

<!-- Detail SuperHero Start -->
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    Ini data milik Storm. Kamu tau nggak sih kalo selain kuat, dia itu juga cantik banget? <3
                </div>
                <hr/>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h3>Detail Superhero: Storm</h3>
            </div>
            <div class="col-md-4  text-right">
                <button class="btn btn-primary">Edit</button>
                <button class="btn btn-danger">Hapus</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <td>ID</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>
                            <input type="text" class="form-control" value="Storm"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>
                            <select class="form-control">
                                <option value="p">Laki-laki</option>
                                <option value="l" selected>Perempuan</option>
                            </select>
                        </td>
                    </tr>
                </table>

                <table class="table table-bordered">
                    <thead>
                    <th>No</th>
                    <th>Skill</th>
                    <th>
                        <button class="btn btn-primary btn-small">Tambah Skill</button>
                    </th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Bisa Terbang</td>
                        <td>
                            <button class="btn btn-danger btn-small">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Bisa Membuat Hujan</td>
                        <td>
                            <button class="btn btn-danger btn-small">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Bisa Membuat Petir</td>
                        <td>
                            <button class="btn btn-danger btn-small">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Bisa Mengendalikan Angin dan Badai</td>
                        <td>
                            <button class="btn btn-danger btn-small">Hapus</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
<!-- Detail SuperHero End-->

<hr class="hr100"/>

<!-- Simulasi Start -->
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    <p>
                    Nah, ini adalah simulasi jika <stromg>Wolverine & Storm</stromg> menikah.
                    Maka anak-anak mereka kemungkinan akan mewarisi Skill dari Ayah dan Ibunya.
                    Kamu bisa mengganti-ganti Suami / Istri untuk melihat Skill yang akan dimiliki oleh anak-anaknya.
                    </p>

                    <p>
                    <i>Tentunya Laki-laki hanya bisa menikah dengan Perempuan ya, awas jangan sampai jenis kelaminnya sama! Jeruk makan jeruk dong :D</i>
                    </p>
                </div>
                <hr/>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h3>Simulasi Jika Superhero Menikah</h3>
            </div>
            <div class="col-md-4  text-right">
                <button class="btn btn-primary">Edit</button>
                <button class="btn btn-danger">Hapus</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <td>Suami</td>
                        <td>
                            <select class="form-control">
                                <option value="1" selected>Wolverine</option>
                                <option value="2">Professor X</option>
                                <option value="3">Beast</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Istri</td>
                        <td>
                            <select class="form-control">
                                <option value="p">Raven</option>
                                <option value="l" selected>Storm</option>
                            </select>
                        </td>
                    </tr>
                </table>

                <h3>Maka Anaknya Kemungkinan Akan Memiliki Skill Berikut:</h3>
                <table class="table table-bordered">
                    <thead>
                    <th>No</th>
                    <th>Skill</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Bisa Terbang</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Bisa Membuat Hujan</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Bisa Membuat Petir</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Bisa Mengendalikan Angin dan Badai</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Bisa Sembuh Dengan Cepat</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Mempunyai Cakar Yang Lebih Kuat Dari Baja</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>

<hr class="hr100"/>

<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-8">
        <button class="btn btn-primary">Export To Excel</button>
        <button class="btn btn-primary">Export To PDF</button>

        <hr/>

        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    <p>
                        Kamu juga bisa meng-export data hasil simulasi ini ke EXCEL / PDF. Ingat, data ini rahasia. Jangan sampai jatuh ke tangan musuh ya! Berbahaya!
                    </p>
                </div>
                <hr/>
            </div>
        </div>
    </div>
    <div class="col-md-2">

    </div>
</div>
<!-- Simulasi End-->



<hr class="hr100"/>






<!-- Daftar Skills Start -->
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    Di bawah ini adalah Daftar Skill yang ada.<br/>
                    Kamu bisa mencari nama mereka melalui fasilitas pencarian di sebelah kanan.<br/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h3>Daftar Skill</h3>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                    <form class="form-inline" method="GET" action="/searchSkill">
                        <input type="text" name="searchSkill" class="form-control">
                        <input type="submit" value="Cari" class="btn btn-outline-secondary">
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                      <?php $no=0; ?>
                      @foreach($skills as $item)
                      <?php $no++ ?>
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{$item->skill}}</td>
                        <td>
                            <a href="#" class="btn btn-primary">View Detail</a>
                        </td>
                    </tr>
                    @endforeach





                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
<!-- Daftar Skills End -->


<hr class="hr100"/>

<!-- Detail Skill Start -->
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    Ini adalah skill Bisa Tidur Tanpa Merem. Skill yang berbahaya. Musuh akan terkejut melihat skill ini.
                </div>
                <hr/>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h3>Detail Skill: Bisa Tidur Tanpa Merem</h3>
            </div>
            <div class="col-md-4  text-right">
                <button class="btn btn-primary">Edit</button>
                <button class="btn btn-danger">Hapus</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <td>ID</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>
                            <input type="text" class="form-control" value="Bisa Tidur Tanpa Merem"/>
                        </td>
                    </tr>
                </table>

                <table class="table table-bordered">
                    <thead>
                    <th>No</th>
                    <th>Heroes</th>
                    <th>
                        <button class="btn btn-primary btn-small">Tambah Hero</button>
                    </th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Wolverine</td>
                        <td>
                            <button class="btn btn-danger btn-small">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Storm</td>
                        <td>
                            <button class="btn btn-danger btn-small">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Proffesor X</td>
                        <td>
                            <button class="btn btn-danger btn-small">Hapus</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
<!-- Detail Skill End-->



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
  $('body').on('keyup','#search-posts',function(){
    var searchQuest= $(this).val();

    $.ajax({
      method: 'POST',
      url: '{{ route("search")}}',
      dataType: 'json',
      data:{
        '_token':'{{csrf_token()}}',
        searchQuest:searchQuest,
      },
      success: function(res){
         var tableRow = '';

         $('#dynamic-row').html('');

         $.each(res, function(index, value){
           tableRow = '<tr><td>'+value.id+'</td><td>'+value.nama+'</td><td>'+value.jenisKelamin+'</td><td><a href="#details" id="detailsButton" class="btn btn-primary" >View Detail</a><button class="btn btn-danger">Hapus</button></td></tr>';

                $('#dynamic-row').append(tableRow);


         });
      }

    });
  });
</script>

@endsection
