@extends('layouts.app')

@section('title')
Tokopaedi Cart Page
@endsection

@section('content')
<div class="page-content page-cart">
  <!-- Breadcrumb -->
  <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="/index.html">Home</a>
              </li>
              <li class="breadcrumb-item active">Cart</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <!-- Info Cart -->
  <section class="store-cart">
    <div class="container">
      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-12 table-responsive">
          <table class="table table-borderless table-cart">
            <thead>
              <tr>
                <td>Image</td>
                <td>Name &amp; Seller</td>
                <td>Price</td>
                <td>Menu</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="width: 20%">
                  <img src="/images/products-cart-1.jpg" alt="products-details-1" class="cart-image" />
                </td>
                <td style="width: 35%">
                  <div class="product-title">Sofa</div>
                  <div class="product-subtitle">by Alda Amellia Putri</div>
                </td>
                <td style="width: 35%">
                  <div class="product-title">$29,112</div>
                  <div class="product-subtitle">USD</div>
                </td>
                <td style="width: 20%">
                  <a href="#" class="btn btn-remove-cart">Remove</a>
                </td>
              </tr>
              <tr>
                <td style="width: 20%">
                  <img src="/images/products-cart-2.jpg" alt="products-details-2" class="cart-image" />
                </td>
                <td style="width: 35%">
                  <div class="product-title">Sneaker</div>
                  <div class="product-subtitle">by Kim Jong Unch</div>
                </td>
                <td style="width: 35%">
                  <div class="product-title">$80,309</div>
                  <div class="product-subtitle">USD</div>
                </td>
                <td style="width: 20%">
                  <a href="#" class="btn btn-remove-cart">Remove</a>
                </td>
              </tr>
              <tr>
                <td style="width: 20%">
                  <img src="/images/products-cart-1.jpg" alt="products-details-1" class="cart-image" />
                </td>
                <td style="width: 35%">
                  <div class="product-title">Coffee Holder</div>
                  <div class="product-subtitle">by Kimin</div>
                </td>
                <td style="width: 35%">
                  <div class="product-title">$13,492</div>
                  <div class="product-subtitle">USD</div>
                </td>
                <td style="width: 20%">
                  <a href="#" class="btn btn-remove-cart">Remove</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row" data-aos="fade-up" data-aos-delay="150">
        <div class="col-12">
          <hr />
        </div>
        <div class="col-12">
          <h2 class="mb-4">Shipping Details</h2>
        </div>
      </div>
      <form>
        <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
          <div class="col-md-6">
            <div class="form-group">
              <label for="addressOne">Address 1</label>
              <input type="text" class="form-control" id="addressOne" name="addressOne"
                value="Jln. Sama Aku Nikah Sama dia" placeholder="Input your address.." />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="addressTwo">Address 2</label>
              <input type="text" class="form-control" id="addressTwo" name="addressTwo" value="Jawa Barat, Indonesia"
                placeholder="Input your address.." />
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="province">Province</label>
              <select name="province" id="province" class="form-control">
                <option value="Aceh">Aceh</option>
                <option value="Bali">Bali</option>
                <option value="Bangka Belitung Islands">
                  Bangka Belitung Islands
                </option>
                <option value="Banten">Banten</option>
                <option value="Bengkulu">Bengkulu</option>
                <option value="Central Java	">Central Java</option>
                <option value="Central Kalimantan">
                  Central Kalimantan
                </option>
                <option value="Central Sulawesi">Central Sulawesi</option>
                <option value="East Java">East Java</option>
                <option value="East Kalimantan">East Kalimantan</option>
                <option value="East Nusa Tenggara">
                  East Nusa Tenggara
                </option>
                <option value="Gorontalo">Gorontalo</option>
                <option value="Special Capital Region of Jakarta">
                  Special Capital Region of Jakarta
                </option>
                <option value="Jambi">Jambi</option>
                <option value="Lampung">Lampung</option>
                <option value="Maluku">Maluku</option>
                <option value="North Kalimantan">North Kalimantan</option>
                <option value="North Maluku">North Maluku</option>
                <option value="North Sulawesi">North Sulawesi</option>
                <option value="North Sumatra">North Sumatra</option>
                <option value="Papua">Papua</option>
                <option value="Riau">Riau</option>
                <option value="Riau Islands">Riau Islands</option>
                <option value="Southeast Sulawesi">
                  Southeast Sulawesi
                </option>
                <option value="South Kalimantan">South Kalimantan</option>
                <option value="South Sulawesi">South Sulawesi</option>
                <option value="South Sumatra">South Sumatra</option>
                <option value="West Java">West Java</option>
                <option value="West Kalimantan">West Kalimantan</option>
                <option value="West Nusa Tenggara">
                  West Nusa Tenggara
                </option>
                <option value="West Papua">West Papua</option>
                <option value="West Sulawesi">West Sulawesi</option>
                <option value="West Sumatra">West Sumatra</option>
                <option value="Special Region of Yogyakarta">
                  Special Region of Yogyakarta
                </option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="city">City</label>
              <select name="city" id="city" class="form-control">
                <option value="Bekasi">Bekasi</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="postalCode">Postal Code</label>
              <input type="text" class="form-control" id="postalCode" name="postalCode" value="17519"
                placeholder="Input your postal code.." />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="country">Country</label>
              <input type="text" class="form-control" id="country" name="country" value="Indonesia"
                placeholder="Input your country.." />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="mobile">Mobile</label>
              <input type="text" class="form-control" id="mobile" name="mobile" value="+628 7887 11327"
                placeholder="Input your mobile.." />
            </div>
          </div>
        </div>
      </form>
      <div class="row" data-aos="fade-up" data-aos-delay="150">
        <div class="col-12">
          <hr />
        </div>
        <div class="col-12">
          <h2 class="mb-1">Payment Informations</h2>
        </div>
      </div>
      <div class="row" data-aos="fade-up" data-aos-delay="200">
        <div class="col-4 col-md-2">
          <div class="product-title">$10</div>
          <div class="product-subtitle">Country Tax</div>
        </div>
        <div class="col-4 col-md-3">
          <div class="product-title">$280</div>
          <div class="product-subtitle">Product Insurance</div>
        </div>
        <div class="col-4 col-md-2">
          <div class="product-title">$580</div>
          <div class="product-subtitle">Ship to Jakarta</div>
        </div>
        <div class="col-4 col-md-2">
          <div class="product-title text-success">$392,409</div>
          <div class="product-subtitle">Total</div>
        </div>
        <div class="col-8 col-md-3">
          <a href="/success.html" class="btn btn-success mt-4 px-4 btn-block">
            Checkout Now
          </a>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection