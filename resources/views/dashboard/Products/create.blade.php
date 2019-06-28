@section('title', 'Dashboard')

@extends('tamplates.admin')


@section('content')
<section class="pb-4">
  <div class="container-fluid">
    <form action="{{url('dashboard/product')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-6">
          <div class="card border-info">
            <div class="card-body">
              <div class="form-group">
                <label for="kategori">Code Product</label>
                <input type="text" class="form-control form-control-lg" name="code_product" id="code_product" placeholder="Masukan Code Product" required="">
                {{-- @error("code")
                  <div class="badge badge-danger"><small>{{$message}}</small></div>
                @enderror --}}
              </div>
              <div class="form-group">
                <label for="nama_buku">Nama Product</label>
                <input type="text" class="form-control form-control-lg" name="nama_product" id="nama_product" placeholder="Masukan Nama Product" required="">
                {{-- @error("name")
                  <div class="badge badge-danger"><small>{{$message}}</small></div>
                @enderror --}}
              </div>
              <div class="form-group">
                <label for="penerbit">Varian</label>
                <input type="text" class="form-control form-control-lg" name="varian" id="varian" aria-describedby="varian" placeholder="Masukan Varian">
                @error("varian")
                  <div class="badge badge-danger"><small>{{$message}}</small></div>
                @enderror
              </div>
              <button type="submit" name="btnSimpan" class="btn btn-success btn-lg btn-block"><i class="fa fa-save"></i> SIMPAN</button>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="card border-info">
            <div class="card-body">
              <div class="form-group">
                <div class="row">
                  <div class="col-md-8">
                    <label for="harga">Price</label>
                    <div class="row">
                      <div class="col-md-12">
                        <input type="text" class="form-control" name="price" id="price" aria-describedby="price" placeholder="Masukan Harganya">
                      </div>
                    </div>
                    @error("price")
                      <div class="badge badge-danger"><small>{{$message}}</small></div>
                    @enderror
                  </div>
                  <div class="col-md-4">
                    <label for="stok">Stock</label>
                    <div class="row">
                      <div class="col-md-12">
                        <input type="text" class="form-control" name="stock" id="stock" aria-describedby="stock" placeholder="Jumlah Stock">
                      </div>
                    </div>
                    @error("stock")
                      <div class="badge badge-danger"><small>{{$message}}</small></div>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="penerbit">categorie</label>
                <select name="categorie_id" id="categorie_id" class="form-control">
                    <option value="">>> PILIHAN <<</option>
                    @foreach($list_categories as $categorie)
                    <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                    @endforeach
                </select>
                @error("categorie_id")
                  <div class="badge badge-danger"><small>{{$message}}</small></div>
                @enderror
              </div>
              
              <div class="form-group">
                <div class="row">
                  <div class="col-md-8">
                  <img src="{{url('')}}/image/cover-kosong.png" id="tampil" name="tampil" class="shadow p-1  bg-white rounded" alt="" style="width: 105px;">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-8">
                    <input type="file" name="image" class="form-control-sm" id="image" onchange="readURL(this);" >
                    &nbsp;&nbsp;<i><small id="cover" class="form-text text-muted mt-0">**Ukuran file cover Maks. 10 MB;.</small></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>

@stop