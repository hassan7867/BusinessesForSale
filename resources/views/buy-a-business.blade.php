@extends('layout/layout')
@section('content')
    <style>

        .customsearchinputfield{
            padding: 15px;
            width: 250px;
            display: inline!important;
            height: 60px!important;
            border-radius: 0px!important;
        }
        .cutomsearchbtnclass{
            height: 60px!important;
            border-radius: 0px!important;
        }
        .margintopresp{
            margin-top: 80px;
        }

        .mainsecmarginresp{
            margin-top: 90px;
        }
        .fontsizeresp{
            font-size: 35px;
        }
        @media screen and (max-width: 700px) {
            .customsearchinputfield{
                border-radius: 10px!important;
                margin-top: 10px;
                display: block!important;
                width: 100%!important;
            }
            .cutomsearchbtnclass{
                border-radius: 10px!important;
                margin-top: 10px;
                display: block;
                width: 100%;
            }
            .margintopresp{
                margin-top: 18px!important;
            }
            .mainsecmarginresp{
                margin-top: 0px;
            }
            .fontsizeresp{
                font-size: 25px;
            }
        }


        .rowclassinlisting{
            padding: 20px;
            border-top: 1px solid lightgrey;
            margin-bottom: 15px;
        }
        .marginbtnfav{
            margin-left: 15px;
            margin-top: 15px;
        }
        .viewmoreresp{
            margin-top: 15px;
        }

        .topmargininbuybus{
            margin-top: 100px;
        }

        .paddingofwhiteboxresp{
            padding: 25px;
        }
        .filtersectiononmobile{
            display: none;
        }
        .respmarginonmobilep{
            margin-top: 10px;margin-bottom: 10px;
        }


        @media screen and (max-width: 700px) {
            .marginbtnfav{
                margin-left: 0px;
                margin-top: 15px;
                display: block;
            }
            .paddingofwhiteboxresp{
                padding: 0px!important;
            }
            .viewmoreresp{
                display: block;
            }
            .colmd8class{
                margin-top: 15px;
            }
            .topmargininbuybus{
                margin-top: 0px;
            }
            .removeflexonmobile{
                display: block!important;
            }
            .respcontainerformobile{
                padding-right: 0px;
                padding-left: 0px;
            }
            .downFilters{
                display: none;
            }
            .respmarginonmobilep{
                margin-top: 0px;margin-bottom: 0px;
            }
            .filtersectiononmobile{
                display: block;
            }
        }
    </style>
    <!-- content begin -->
    {{--<div class="no-bottom no-top" id="content">--}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
{{--    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>--}}

    <div id="top"></div>

    <section id="section-hero" aria-label="section" class="no-top no-bottom topmargininbuybus"
             data-bgimage="url(images/background/bg-shape-1.jpg) bottom">
        <input id="session-id" style="display: none" value="{{\Illuminate\Support\Facades\Session::get('userId')}}">
        <div class="v-center" style="min-height: 50vh!important;">
            <div class="container respcontainerformobile">
                <div class="row ">
                    <div class="col-md-12">
                       <div style="background: rgba(211,211,211,0.55);" class="paddingofwhiteboxresp">
                           <div style="margin: 0 auto;max-width: 700px;;padding: 25px!important;background: #ffffffa1">
                               <div>
                                   <div class="d-flex flex-wrap removeflexonmobile">
                                       <div>
                                           <select class="form-control customsearchinputfield" id="category-selectioninsearch">
                                               <option selected value="any">Any Category</option>
                                               @foreach($categories as $item)
                                                   <option value="{{$item->id}}">{{$item->name}}</option>
                                               @endforeach
                                           </select>
{{--                                           <input class="form-control customsearchinputfield" type="text" placeholder="e.g Restaurant, IT companies..." style="border-bottom-left-radius: 10px!important;border-top-left-radius: 10px!important;">--}}
                                       </div>
                                       <div>
                                           <input id="locationselectorinsearch" list="locationlistinsearch" class="form-control customsearchinputfield" type="text" placeholder="e.g London, Birmingham..." >
                                           <datalist id="locationlistinsearch">
                                               @foreach(\App\Models\City::all() as $item)
                                                   <option value="{{$item->name}}">
                                               @endforeach
                                           </datalist>
                                       </div>
                                       <div>
                                           <button class="btn btn-main cutomsearchbtnclass" style="border-bottom-right-radius: 10px!important;border-top-right-radius: 10px!important;" onclick="searchingData()">SEARCH</button>
                                       </div>

                                   </div>

                               </div>


                           </div>
                       </div>
                        <div style="margin-top: 5px;margin-bottom: 10px;padding: 10px;background: rgba(211,211,211,0.35);height: 60px" class="filtersectiononmobile">
                            <div style="float: left">
                                <select class="form-control" id="sortby1" onchange="getFilteredData()">
                                    <option value="most-recent" selected>Most recent</option>
                                    <option value="price-lowest">Price lowest first</option>
                                    <option value="price-highest">Price highest first</option>
                                    <option value="turnover-high-low">Turnover high-low</option>
                                    <option value="profit-high-low">Profit high-low</option>
                                </select>
                            </div>
                            <div style="float: right">
                                <div class="btn-group dropleft">
                                    <button onclick="document.getElementById('menudropDownFilters').innerHTML = document.getElementById('downFilters').innerHTML" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Filters
                                    </button>
                                    <div class="dropdown-menu" id="menudropDownFilters" style="padding: 10px;width: 250px">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="wow fadeInUp respmarginonmobilep" data-wow-delay=".75s" style="font-size: 30px;text-align: center">
                            <span id="catnameselected">Business</span> for sale in <span id="locationnameselected">all locations</span>
                        </h3>
                        <p class="wow fadeInUp lead respmarginonmobilep" data-wow-delay="1s" style="text-align: center">
                            Browse the listings below and refine your search to help you buy Business for sale.
                        </p>
                        <div id="loadergif11223355" style="margin: 0 auto;max-width: 100px;display: none">
                            <img src="{{url('loader.gif')}}" style="height: 100px">
                        </div>
                        <div class="spacer-10"></div>
                        <div class="mb-sm-30"></div>
                    </div>
                    <div class="col-md-8 xs-hide">
                    </div>

                </div>

                <div class="row" >
                    <div class="col-md-2 downFilters" style="border: 1px solid lightgrey;padding: 10px" id="downFilters">
                        <p style="color: var(--secondary-color);font-weight: bold" class="downFilters">Category search</p>
                        <select class="form-control downFilters" id="category-selection" onchange="getFilteredData()">
                            <option selected value="any" id="category-selection-any">Any</option>
                            @foreach($categories as $item)
                                <option value="{{$item->id}}" id="category-selection-{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>

                        <div style="margin-top: 10px" class="downFilters">
                            <select class="form-control" id="sortby" onchange="getFilteredData()">
                                <option value="most-recent" selected>Most recent</option>
                                <option value="price-lowest">Price lowest first</option>
                                <option value="price-highest">Price highest first</option>
                                <option value="turnover-high-low">Turnover high-low</option>
                                <option value="profit-high-low">Profit high-low</option>
                            </select>
                        </div>
                        <div style="margin-top: 10px" class="downFilters">
                            <input class="form-control" list="locationlist" id="locationSelector" name="locationSelector" placeholder="Location">
                            <datalist id="locationlist">
                                @foreach(\App\Models\City::all() as $item)
                                    <option value="{{$item->name}}">
                                @endforeach
                            </datalist>
                        </div>
                        <hr class="downFilters">
                        <div style="margin-top: 10px">
                            <p style="color: var(--secondary-color);font-weight: bold">Age of listing</p>
                            <div style="margin-top: 5px">
                                <input type="checkbox" name="ageListing" onchange="selectAgeofListing(this)" class="chk" id="ageAnytime"> <span>Anytime</span>
                            </div>
                            <div style="margin-top: 5px">
                                <input type="checkbox" name="ageListing" onchange="selectAgeofListing(this)" class="chk" id="age14"> <span>Last 14 Days</span>
                            </div>
                            <div style="margin-top: 5px">
                                <input type="checkbox" name="ageListing" onchange="selectAgeofListing(this)" class="chk" id="ageMonth"> <span>Last Month</span>
                            </div>
                            <div style="margin-top: 5px">
                                <input type="checkbox" name="ageListing" onchange="selectAgeofListing(this)" class="chk" id="age3Months"> <span>Last 3 Months</span>
                            </div>

                        </div>
                        <hr>
                        <div style="margin-top: 10px">
                            <p style="color: var(--secondary-color);font-weight: bold">Type of Business</p>
                            <div style="margin-top: 5px">
                                <input type="checkbox" onchange="selecttypeofListing()" id="freeholdType"> <span>Freehold</span>
                            </div>
                            <div style="margin-top: 5px">
                                <input type="checkbox" onchange="selecttypeofListing()" id="LeaseholdType"> <span>Leasehold</span>
                            </div>
                            <div style="margin-top: 5px">
                                <input type="checkbox" onchange="selecttypeofListing()" id="RelocatableType"> <span>Relocatable</span>
                            </div>
                            <div style="margin-top: 5px">
                                <input type="checkbox" onchange="selecttypeofListing()" id="HomebasedType"> <span>Homebased</span>
                            </div>
                            <div style="margin-top: 5px">
                                <input type="checkbox" onchange="selecttypeofListing()" id="accommodationType"> <span>With accommodation</span>
                            </div>
                            <div style="margin-top: 5px">
                                <input type="checkbox" onchange="selecttypeofListing()" id="Franchiseype"> <span>Franchise</span>
                            </div>

                        </div>
                        <hr>
                        <div style="margin-top: 10px">
                            <p style="color: var(--secondary-color);font-weight: bold">Price</p>
                            <div  style="margin-top: 10px;border-bottom: 1px solid lightgrey;padding: 10px">
                                <p>Asking Price (USD)</p>
                                <div>
                                    <div >
                                        <input type="text" class="form-control" id="lowprice" placeholder="From">
                                    </div>
                                    <div style="margin-top: 5px">
                                        <input type="text" class="form-control" id="highprice" placeholder="To">
                                    </div>
                                    <div style="margin-top: 5px">
                                       <button style="color: var(--secondary-color)" onclick="getFilteredData()"><i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div  style="margin-top: 10px;border-bottom: 1px solid lightgrey;padding: 10px">
                                <p>Turnover (USD)</p>
                                <div>
                                    <div >
                                        <input type="text" class="form-control" id="lowturnover" placeholder="From">
                                    </div>
                                    <div style="margin-top: 5px">
                                        <input type="text" class="form-control" id="highturnover" placeholder="To">
                                    </div>
                                    <div style="margin-top: 5px">
                                        <button style="color: var(--secondary-color)" onclick="getFilteredData()"><i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div  style="margin-top: 10px;border-bottom: 1px solid lightgrey;padding: 10px">
                                <p>Net Profit (USD)</p>
                                <div>
                                    <div >
                                        <input type="text" class="form-control" id="lowProfit" placeholder="From">
                                    </div>
                                    <div style="margin-top: 5px">
                                        <input type="text" class="form-control" id="highProfit" placeholder="To">
                                    </div>
                                    <div style="margin-top: 5px">
                                        <button style="color: var(--secondary-color)" onclick="getFilteredData()"><i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-top: 10px">
                                <button class="btn btn-main" onclick="getFilteredData()" style="display: block">SEARCH</button>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-10" id="downfullonmobile">
                        <p style="text-align: center">There are <span id="totalItems">0</span> Items</p>
                        <div id="tbodyId">

                        </div>
{{--                        <div class="row rowclassinlisting">--}}
{{--                            <div class="col-md-4">--}}
{{--                                <img src="{{url('')}}/gallery-item-6.jpg" class="lazy img-fluid wow fadeIn"--}}
{{--                                     data-wow-delay="1.25s" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="col-md-8">--}}
{{--                                    <a href="#">--}}
{{--                                        New lease available on this extremely well presented, A1 Retail Shop premises...</a>--}}
{{--                                    <p>--}}
{{--                                        New lease available on this well presented, A1 retail shop currently trading as a Specialised Clothes Shop. Double Fronted Retail Shop:Unit 5 & 6 Ambassador House, Brigstock Road, Thornton Heath, CR7 7JG IDEALLY SITUATED IN HIGH...--}}


{{--                                    </p>--}}
{{--                                <p>Location: Thornton Heath, London, England</p>--}}
{{--                                <a href="#">View More</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>


    <a href="#" id="back-to-top"></a>
    <script>


        $(document).ready(function(){

            if ($(window).width() < 700) {
                $('#downfullonmobile').removeClass('col-md-10').addClass('col-md-12');
            }

            var timeout;
            var delay = 1000;   // 2 seconds

            $('#locationSelector').keyup(function(e) {
                if(timeout) {
                    clearTimeout(timeout);
                }
                timeout = setTimeout(function() {
                    getFilteredData();
                }, delay);
            });


            if (localStorage.hasOwnProperty('category')){
                document.getElementById('category-selection').value = localStorage.getItem('category');
                document.getElementById('category-selectioninsearch').value = localStorage.getItem('category');
            }
            if (localStorage.hasOwnProperty('location')){
                document.getElementById('locationSelector').value = localStorage.getItem('location');
                document.getElementById('locationselectorinsearch').value = localStorage.getItem('location');

            }
            localStorage.removeItem('category');
            localStorage.removeItem('location');

            if (localStorage.hasOwnProperty('ageOfListing')){
                let ageoflisting = localStorage.getItem('ageOfListing');
               if (ageoflisting === 'ageAnytime'){
                   document.getElementById('ageAnytime').setAttribute('checked', true);
               }
                else if (ageoflisting === 'age14'){
                    document.getElementById('age14').setAttribute('checked', true);
                }
                else if (ageoflisting === 'ageMonth'){
                    document.getElementById('ageMonth').setAttribute('checked', true);
                }
                else if (ageoflisting === 'age3Months'){
                    document.getElementById('age3Months').setAttribute('checked', true);
                }
            }
            localStorage.removeItem('ageOfListing');

            let freeholdType = localStorage.getItem('freeholdType');
            let LeaseholdType = localStorage.getItem('LeaseholdType');
            let RelocatableType = localStorage.getItem('RelocatableType');
            let accommodationType = localStorage.getItem('accommodationType');
            let Franchiseype =  localStorage.getItem('Franchiseype');
            let HomebasedType =  localStorage.getItem('HomebasedType');

            if (freeholdType === 'true'){
                document.getElementById('freeholdType').setAttribute('checked', true);
            }
            if (LeaseholdType === 'true'){
                document.getElementById('LeaseholdType').setAttribute('checked', true);
            }
            if (RelocatableType === 'true'){
                document.getElementById('RelocatableType').setAttribute('checked', true);
            }
            if (accommodationType === 'true'){
                document.getElementById('accommodationType').setAttribute('checked', true);
            }
            if (Franchiseype === 'true'){
                document.getElementById('Franchiseype').setAttribute('checked', true);
            }
            if (HomebasedType === 'true'){
                document.getElementById('HomebasedType').setAttribute('checked', true);
            }

            localStorage.removeItem('freeholdType');
            localStorage.removeItem('LeaseholdType');
            localStorage.removeItem('RelocatableType');
            localStorage.removeItem('accommodationType');
            localStorage.removeItem('Franchiseype');
            localStorage.removeItem('HomebasedType');

            let lowprice = localStorage.getItem('lowprice');
            let highprice = localStorage.getItem('highprice');
            let lowturnover = localStorage.getItem('lowturnover');
            let highturnover = localStorage.getItem('highturnover');
            let lowProfit =  localStorage.getItem('lowProfit');
            let highProfit =  localStorage.getItem('highProfit');

            document.getElementById('lowprice').value = lowprice;
            document.getElementById('highprice').value = highprice;
            document.getElementById('lowturnover').value = lowturnover;
            document.getElementById('highturnover').value = highturnover;
            document.getElementById('lowProfit').value = lowProfit;
            document.getElementById('highProfit').value = highProfit;

            localStorage.removeItem('lowprice');
            localStorage.removeItem('highprice');
            localStorage.removeItem('lowturnover');
            localStorage.removeItem('highturnover');
            localStorage.removeItem('lowProfit');
            localStorage.removeItem('highProfit');

            getFilteredData();
        });


        let limit = 100;
        let offsetValue = -100;

        function resetLimit(){
            limit = 100;
            offsetValue = -100;
            document.getElementById('tbodyId').innerHTML = '';
        }

        // $('#locationSelector').keyup(delay(function (e) {
        //     getFilteredData();
        // }, 500));

        let ageOfListing = '';
        function selectAgeofListing(ref){
            $('input.chk').not(ref).prop('checked', false);
            let ageAnytime = document.getElementById('ageAnytime').checked;
            let age14 = document.getElementById('age14').checked;
            let ageMonth = document.getElementById('ageMonth').checked;
            let age3Months = document.getElementById('age3Months').checked;
            if (ageAnytime === true){
                ageOfListing = 'anyTime';
            }else if (age14 === true){
                ageOfListing = 'age14';
            }
            else if (ageMonth === true){
                ageOfListing = 'ageMonth';
            }
            else if (age3Months === true){
                ageOfListing = 'age3Months';
            }
            getFilteredData();
        }

        function selecttypeofListing(){
            getFilteredData();
        }

        function searchingData(){
            document.getElementById('category-selection').value = document.getElementById('category-selectioninsearch').value;
            document.getElementById('locationSelector').value = document.getElementById('locationselectorinsearch').value;
            getFilteredData();
        }

        function getFilteredData(statt = -1){

            // if (statt !== -1){
                resetLimit();
            // }
            let categorySelected = document.getElementById('category-selection').value;
            let categorySelectedName = document.getElementById('category-selection-' + categorySelected).innerText;
            if (categorySelectedName === 'Any'){
                document.getElementById('catnameselected').innerText = 'Business';
            }else{
                document.getElementById('catnameselected').innerText = categorySelectedName + ' Business';
            }

            if ($(window).width() < 700) {
                let sortby = document.getElementById('sortby1').value;
            }else{
                let sortby = document.getElementById('sortby').value;
            }

            let locationSelector = document.getElementById('locationSelector').value;
            if (locationSelector === '' || locationSelector === undefined){
                document.getElementById('locationnameselected').innerText = 'all locations';
            }
            else{
                document.getElementById('locationnameselected').innerText = locationSelector;
            }

            let freeholdType = document.getElementById('freeholdType').checked;
            let LeaseholdType = document.getElementById('LeaseholdType').checked;
            let RelocatableType = document.getElementById('RelocatableType').checked;
            let accommodationType = document.getElementById('accommodationType').checked;
            let Franchiseype = document.getElementById('Franchiseype').checked;

            let lowprice = document.getElementById('lowprice').value;
            let highprice = document.getElementById('highprice').value;
            let lowturnover = document.getElementById('lowturnover').value;
            let highturnover = document.getElementById('highturnover').value;
            let lowProfit = document.getElementById('lowProfit').value;
            let highProfit = document.getElementById('highProfit').value;

            offsetValue = offsetValue + limit;
            let formData = new FormData();
            formData.append('limit', limit);
            formData.append('offset', offsetValue);
            formData.append('useragent',  navigator.userAgent);
            formData.append('search',  statt);
            formData.append('categorySelected',  categorySelected);
            formData.append('sortby',  sortby);
            formData.append('locationSelector',  locationSelector);
            formData.append('ageOfListing',  ageOfListing);

            formData.append('freeholdType',  freeholdType);
            formData.append('LeaseholdType',  LeaseholdType);
            formData.append('RelocatableType',  RelocatableType);
            formData.append('accommodationType',  accommodationType);
            formData.append('Franchiseype',  Franchiseype);


            formData.append('lowprice',  lowprice);
            formData.append('highprice',  highprice);
            formData.append('lowturnover',  lowturnover);
            formData.append('highturnover',  highturnover);
            formData.append('lowProfit',  lowProfit);
            formData.append('highProfit',  highProfit);

            formData.append("_token", "{{ csrf_token() }}");
            document.getElementById('loadergif11223355').style.display = 'flex';
            $.ajax({
                url: `{{env('APP_URL')}}/search-business`,
                type: 'POST',
                dataType: "JSON",
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                success: function (result) {
                    document.getElementById('loadergif11223355').style.display = 'none';

                    if (result.status === true) {
                        console.log(result.data);
                        showData(result.data);
                        document.getElementById('totalItems').innerText = result.totalItems;


                    } else {
                        swal({
                            icon: 'error',
                            title: 'Oops...',
                            text: result.message,
                        });
                    }
                },
                error: function (data) {
                    document.getElementById('loadergif11223355').style.display = 'none';

                    swal({
                        icon: 'error',
                        title: 'Oops...',
                        text: "server Error",
                    });
                }
            });
        }

        function showData(entries){
            document.getElementById('tbodyId').innerHTML = '';
            for(let i=0;i<entries.length;i++){
                let row = document.createElement('div');
                let colmd4 = document.createElement('div');
                let colmd8 = document.createElement('div');
                row.classList.add('row', 'rowclassinlisting');
                colmd4.classList.add('col-md-4');
                colmd8.classList.add('col-md-8', 'colmd8class');

                let img = document.createElement('img');
                img.classList.add('lazy', 'img-fluid', 'wow', 'fadeIn');
                img.setAttribute('data-wow-delay', '1.25s');
                if (entries[i].photos.length > 0){
                    img.src = `{{url('')}}/get-listing-photo/${entries[i].photos[0].id}`;
                }else{
                    img.src = `{{url('')}}/defaultphoto.png`;
                }
                img.style.height = '270px';

                colmd4.appendChild(img);

                let heading = document.createElement('a');
                let description = document.createElement('p');
                let location = document.createElement('p');
                let categories = document.createElement('p');
                let price = document.createElement('p');
                let viewMore = document.createElement('a');
                let addToFav = document.createElement('a');
                let contactSeller = document.createElement('a');
                viewMore.classList.add('btn', 'btn-main', 'viewmoreresp')
                addToFav.classList.add('btn', 'btn-main', 'marginbtnfav')
                contactSeller.classList.add('btn', 'btn-main', 'marginbtnfav')

                heading.innerText = entries[i].heading;
                description.innerText = entries[i].summary;
                location.innerText = "Location : " +entries[i].location;
                categories.innerText = "Categories : " +entries[i].categories;
                price.innerText =  entries[i].asking_price_as + " : "+entries[i].price_symbol+" " + entries[i].asking_price;
                viewMore.innerHTML = '<span style="font-weight: bold;font-size: 15px">View More</span> ' + '<i class="fa fa-chevron-right"></i>';
                addToFav.innerHTML = '<span style="font-weight: bold;font-size: 15px">Add to Fav</span> ' + '<i class="fa fa-heart"></i>';
                contactSeller.innerHTML = '<span style="font-weight: bold;font-size: 15px">Contact Seller</span> ' ;

                heading.style.marginTop = '15px';
                description.style.marginTop = '5px';
                location.style.marginTop = '5px';
                categories.style.marginTop = '5px';
                price.style.marginTop = '5px';
                price.style.fontWeight = 'bold';

                heading.setAttribute('href', `{{env('APP_URL')}}/{{\Illuminate\Support\Facades\Session::get('url_code')}}/business-details/${entries[i].id}`);
                viewMore.setAttribute('href', `{{env('APP_URL')}}/{{\Illuminate\Support\Facades\Session::get('url_code')}}/business-details/${entries[i].id}`);
                addToFav.setAttribute('href', '#');
                contactSeller.setAttribute('href', '#');



                colmd8.appendChild(heading);
                colmd8.appendChild(description);
                colmd8.appendChild(location);
                colmd8.appendChild(categories);
                colmd8.appendChild(price);
                colmd8.appendChild(viewMore);
                colmd8.appendChild(addToFav);
                colmd8.appendChild(contactSeller);

                row.appendChild(colmd4);
                row.appendChild(colmd8);



                // let upvotebutton = document.createElement('button');
                // upvotebutton.setAttribute('type', 'button');
                // upvotebutton.classList.add('customupvotebtn');
                // if (entries[i].isUpvoted === 1){
                //     upvotebutton.style.background = '#28a745';
                //     upvotebutton.style.color = 'white';
                // }
                //
                // upvotebutton.addEventListener("click", function() {
                //     if (entries[i].isUpvoted === 0){
                //         upvotebutton.style.background = '#28a745';
                //         upvotebutton.style.color = 'white';
                //         entries[i].upvotes = parseInt(entries[i].upvotes) + 1;
                //         upvotebutton.removeChild(upvotebutton.lastChild);
                //         upvotebutton.append(entries[i].upvotes);
                //         upvote(entries[i].id);
                //         entries[i].isUpvoted = 1;
                //     }
                // });

                document.getElementById('tbodyId').appendChild(row);
            }
        }

        function showError(message){
            swal({
                icon: 'error',
                title: 'Oops...',
                text: message,
            });
        }

        function showSuccess(message){
            swal({
                icon: 'Success',
                title: 'Congrats',
                text: message,
            });
        }
    </script>
@endsection
