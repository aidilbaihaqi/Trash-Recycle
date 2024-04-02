@extends('layouts.main')

@section('container')
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card position-relative">
        <div class="card-body">
          <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md-12 d-flex flex-column justify-content-start">
                    <div class="ml-xl-7 mt-3">
                      <p class="card-title">Berita Terbaru</p>
                      <img src="{{ asset('images/more/example.png') }}" alt="example" width="300" class="img-fluid mb-2">
                      <h1 class="text-primary">Contoh Title</h1>
                      <h3 class="font-weight-500 mb-xl-4 text-primary">Aidil Baihaqi</h3>
                      <p class="mb-2 mb-xl-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint aspernatur voluptates veritatis, qui distinctio ducimus excepturi fugiat quo et eveniet praesentium doloremque veniam voluptate ipsum beatae? Hic ratione vitae labore delectus earum facere rem aliquid esse provident mollitia cumque officia neque, maiores illo asperiores fugiat nostrum in a beatae voluptate voluptatibus. Nisi quisquam architecto debitis quae inventore, sequi officiis error quod deserunt commodi nam iusto expedita reprehenderit quibusdam praesentium assumenda ducimus distinctio magni corrupti sint? Enim similique perspiciatis possimus fugiat atque illum consequuntur a modi vel quibusdam ipsam repudiandae quidem voluptates magnam fuga, laudantium veritatis? Eaque repudiandae tempore officiis laboriosam.</p>
                    </div>  
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-12 d-flex flex-column justify-content-start">
                    <div class="ml-xl-7 mt-3">
                      <p class="card-title">Berita Terbaru</p>
                      <img src="{{ asset('images/more/example.png') }}" alt="example" width="300" class="img-fluid mb-2">
                      <h1 class="text-primary">Contoh Title</h1>
                      <h3 class="font-weight-500 mb-xl-4 text-primary">Farhan Mulya Putra</h3>
                      <p class="mb-2 mb-xl-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint aspernatur voluptates veritatis, qui distinctio ducimus excepturi fugiat quo et eveniet praesentium doloremque veniam voluptate ipsum beatae? Hic ratione vitae labore delectus earum facere rem aliquid esse provident mollitia cumque officia neque, maiores illo asperiores fugiat nostrum in a beatae voluptate voluptatibus. Nisi quisquam architecto debitis quae inventore, sequi officiis error quod deserunt commodi nam iusto expedita reprehenderit quibusdam praesentium assumenda ducimus distinctio magni corrupti sint? Enim similique perspiciatis possimus fugiat atque illum consequuntur a modi vel quibusdam ipsam repudiandae quidem voluptates magnam fuga, laudantium veritatis? Eaque repudiandae tempore officiis laboriosam.</p>
                    </div>  
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-12 d-flex flex-column justify-content-start">
                    <div class="ml-xl-7 mt-3">
                      <p class="card-title">Berita Terbaru</p>
                      <img src="{{ asset('images/more/example.png') }}" alt="example" width="300" class="img-fluid mb-2">
                      <h1 class="text-primary">Contoh Title</h1>
                      <h3 class="font-weight-500 mb-xl-4 text-primary">Meyza Zaharanie</h3>
                      <p class="mb-2 mb-xl-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint aspernatur voluptates veritatis, qui distinctio ducimus excepturi fugiat quo et eveniet praesentium doloremque veniam voluptate ipsum beatae? Hic ratione vitae labore delectus earum facere rem aliquid esse provident mollitia cumque officia neque, maiores illo asperiores fugiat nostrum in a beatae voluptate voluptatibus. Nisi quisquam architecto debitis quae inventore, sequi officiis error quod deserunt commodi nam iusto expedita reprehenderit quibusdam praesentium assumenda ducimus distinctio magni corrupti sint? Enim similique perspiciatis possimus fugiat atque illum consequuntur a modi vel quibusdam ipsam repudiandae quidem voluptates magnam fuga, laudantium veritatis? Eaque repudiandae tempore officiis laboriosam.</p>
                    </div>  
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#detailedReports" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#detailedReports" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-7 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title mb-0">History Transaksi</p>
          <div class="table-responsive">
            <table class="table table-striped table-borderless">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Price</th>
                  <th>Date</th>
                  <th>Status</th>
                </tr>  
              </thead>
              <tbody>
                <tr>
                  <td>Search Engine Marketing</td>
                  <td class="font-weight-bold">$362</td>
                  <td>21 Sep 2018</td>
                  <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                </tr>
                <tr>
                  <td>Search Engine Optimization</td>
                  <td class="font-weight-bold">$116</td>
                  <td>13 Jun 2018</td>
                  <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                </tr>
                <tr>
                  <td>Display Advertising</td>
                  <td class="font-weight-bold">$551</td>
                  <td>28 Sep 2018</td>
                  <td class="font-weight-medium"><div class="badge badge-warning">Pending</div></td>
                </tr>
                <tr>
                  <td>Pay Per Click Advertising</td>
                  <td class="font-weight-bold">$523</td>
                  <td>30 Jun 2018</td>
                  <td class="font-weight-medium"><div class="badge badge-warning">Pending</div></td>
                </tr>
                <tr>
                  <td>E-Mail Marketing</td>
                  <td class="font-weight-bold">$781</td>
                  <td>01 Nov 2018</td>
                  <td class="font-weight-medium"><div class="badge badge-danger">Cancelled</div></td>
                </tr>
                <tr>
                  <td>Referral Marketing</td>
                  <td class="font-weight-bold">$283</td>
                  <td>20 Mar 2018</td>
                  <td class="font-weight-medium"><div class="badge badge-warning">Pending</div></td>
                </tr>
                <tr>
                  <td>Social media marketing</td>
                  <td class="font-weight-bold">$897</td>
                  <td>26 Oct 2018</td>
                  <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-5 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title">Jumlah Sampah</p>
          <div class="charts-data">
            <div class="mt-3">
              <p class="mb-0">Organik</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="progress progress-md flex-grow-1 mr-4">
                  <div class="progress-bar bg-inf0" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mb-0">5k</p>
              </div>
            </div>
            <div class="mt-3">
              <p class="mb-0">Anorganik</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="progress progress-md flex-grow-1 mr-4">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mb-0">1k</p>
              </div>
            </div>
            <div class="mt-3">
              <p class="mb-0">B3</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="progress progress-md flex-grow-1 mr-4">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mb-0">992</p>
              </div>
            </div>
            <div class="mt-3">
              <p class="mb-0">Kertas</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="progress progress-md flex-grow-1 mr-4">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mb-0">687</p>
              </div>
            </div>
            <div class="mt-3">
              <p class="mb-0">Residu</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="progress progress-md flex-grow-1 mr-4">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mb-0">687</p>
              </div>
            </div>
          </div>  
        </div>
      </div>
    </div>
  </div>
@endsection