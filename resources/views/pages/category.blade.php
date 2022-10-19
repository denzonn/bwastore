@extends('layouts.app')

@section('title')
  Store Category Page
@endsection

@section('content')
  <div class="page-content page-home">

    <!-- Categories -->
    <section class="store-trend-categories mt-4">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>All Categories</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/categories-gadgets.svg" alt="categoriesGadget" class="w-100">
              </div>
              <p class="categories-text">Gadgets</p>
            </a>
          </div>

          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/categories-furniture.svg" alt="categoriesGadget" class="w-100">
              </div>
              <p class="categories-text">Furniture</p>
            </a>
          </div>

          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/categories-makeup.svg" alt="categoriesGadget" class="w-100">
              </div>
              <p class="categories-text">Make Up</p>
            </a>
          </div>

          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/categories-sneakers.svg" alt="categoriesGadget" class="w-100">
              </div>
              <p class="categories-text">Sneaker</p>
            </a>
          </div>

          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="500">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/categories-tools.svg" alt="categoriesGadget" class="w-100">
              </div>
              <p class="categories-text">Tools</p>
            </a>
          </div>

          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/categories-baby.svg" alt="categoriesGadget" class="w-100">
              </div>
              <p class="categories-text">Baby</p>
            </a>
          </div>

        </div>
      </div>
    </section>

    <!-- Store New Products -->
    <section class="store-new-products">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>All Products</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <a href="details.html" class="component-products d-block">
              <div class="product-thumbnail">
                <div class="products-image" style="background-image: url(/images/products-apple.jpg);"></div>
              </div>
              <div class="products-text">Apple Watch 4</div>
              <div class="products-price">$890</div>
            </a>
          </div>

          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <a href="details.html" class="component-products d-block">
              <div class="product-thumbnail">
                <div class="products-image" style="background-image: url(/images/products-orange-bagota.jpg);"></div>
              </div>
              <div class="products-text">Orange Bogotta</div>
              <div class="products-price">$94,509</div>
            </a>
          </div>

          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <a href="details.html" class="component-products d-block">
              <div class="product-thumbnail">
                <div class="products-image" style="background-image: url(/images/products-sofa.jpg);"></div>
              </div>
              <div class="products-text">Sofa Ternyaman</div>
              <div class="products-price">$1,409</div>
            </a>
          </div>

          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <a href="details.html" class="component-products d-block">
              <div class="product-thumbnail">
                <div class="products-image" style="background-image: url(/images/products-bubuk-mageti.jpg);"></div>
              </div>
              <div class="products-text">Bubuk Maketti</div>
              <div class="products-price">$225</div>
            </a>
          </div>

          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="500">
            <a href="details.html" class="component-products d-block">
              <div class="product-thumbnail">
                <div class="products-image" style="background-image: url(/images/products-tatakan-gelas.jpg);"></div>
              </div>
              <div class="products-text">Tatakan Gelas</div>
              <div class="products-price">$45,184</div>
            </a>
          </div>

          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600">
            <a href="details.html" class="component-products d-block">
              <div class="product-thumbnail">
                <div class="products-image" style="background-image: url(/images/products-mavic-kawe.jpg);"></div>
              </div>
              <div class="products-text">Mavic Kawe</div>
              <div class="products-price">$503</div>
            </a>
          </div>

          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700">
            <a href="details.html" class="component-products d-block">
              <div class="product-thumbnail">
                <div class="products-image" style="background-image: url(/images/products-black-edition-nike.jpg);"></div>
              </div>
              <div class="products-text">Black Edition Nike</div>
              <div class="products-price">$70,482</div>
            </a>
          </div>

          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800">
            <a href="details.html" class="component-products d-block">
              <div class="product-thumbnail">
                <div class="products-image" style="background-image: url(/images/products-monkey-toys.jpg);"></div>
              </div>
              <div class="products-text">Monkey Toys</div>
              <div class="products-price">$783</div>
            </a>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

