@extends('layout/layout')
@section('content')
    <style>
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


        @media screen and (max-width: 700px) {
            .marginbtnfav{
                margin-left: 0px;
                margin-top: 15px;
                display: block;
            }
            .viewmoreresp{
                display: block;
            }
        }
    </style>
    <!-- content begin -->
    {{--<div class="no-bottom no-top" id="content">--}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <div id="top"></div>

    <section id="section-hero" aria-label="section" class="no-top no-bottom "
             data-bgimage="url(images/background/bg-shape-1.jpg) bottom" style="margin-top: 50px">
        <input id="session-id" style="display: none" value="{{\Illuminate\Support\Facades\Session::get('userId')}}">
        <br>
        <br>
        <div class="v-center" style="min-height: 50vh!important;">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="spacer-single"></div>
                        <div class="spacer-10"></div>
                        <h3 class="wow fadeInUp" data-wow-delay=".75s" style="font-size: 30px;text-align: center">
                            Business for sale in all locations
                        </h3>
                        <p class="wow fadeInUp lead" data-wow-delay="1s" style="text-align: center">
                            Browse the listings below and refine your search to help you buy Business for sale in all locations.
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

                <div class="row">
                    <div class="col-md-2" style="border: 1px solid lightgrey;padding: 10px">
                        <p style="color: var(--secondary-color);font-weight: bold">Category search</p>
                        @foreach($categories as $item)
                            <a style="margin-top: 5px;margin-bottom: 5px;display: block;color: var(--secondary-color);font-weight: bold;cursor: pointer">{{$item->name}} ({{$item->listingCount}})</a>
                        @endforeach
                        <div style="margin-top: 10px">
                            <select class="form-control" id="sortby">
                                <option value="most-recent">Most recent</option>
                                <option value="price-lowest">Price lowest first</option>
                                <option value="price-highest">Price highest first</option>
                                <option value="turnover-high-low">Turnover high-low</option>
                                <option value="profit-high-low">Profit high-low</option>
                            </select>
                        </div>
                        <div style="margin-top: 10px">
                            <input type="text" class="form-control" id="locationSelector" placeholder="Location">
                        </div>
                        <hr>
                        <div style="margin-top: 10px">
                            <p style="color: var(--secondary-color);font-weight: bold">Age of listing</p>
                            <div style="margin-top: 5px">
                                <input type="checkbox" > <span>Anytime</span>
                            </div>
                            <div style="margin-top: 5px">
                                <input type="checkbox" > <span>Last 14 Days</span>
                            </div>
                            <div style="margin-top: 5px">
                                <input type="checkbox" > <span>Last Month</span>
                            </div>
                            <div style="margin-top: 5px">
                                <input type="checkbox" > <span>Last 3 Months</span>
                            </div>

                        </div>
                        <hr>
                        <div style="margin-top: 10px">
                            <p style="color: var(--secondary-color);font-weight: bold">Type of Business</p>
                            <div style="margin-top: 5px">
                                <input type="checkbox" > <span>Freehold</span>
                            </div>
                            <div style="margin-top: 5px">
                                <input type="checkbox" > <span>Leasehold</span>
                            </div>
                            <div style="margin-top: 5px">
                                <input type="checkbox" > <span>Relocatable</span>
                            </div>
                            <div style="margin-top: 5px">
                                <input type="checkbox" > <span>Homebased</span>
                            </div>
                            <div style="margin-top: 5px">
                                <input type="checkbox" > <span>With accommodation</span>
                            </div>
                            <div style="margin-top: 5px">
                                <input type="checkbox" > <span>Franchise</span>
                            </div>

                        </div>
                        <hr>
                        <div style="margin-top: 10px">
                            <p style="color: var(--secondary-color);font-weight: bold">Price</p>
                            <div  style="margin-top: 10px;border-bottom: 1px solid lightgrey;padding: 10px">
                                <p>Asking Price</p>
                                <div>
                                    <div >
                                        <input type="text" class="form-control" id="lowprice" placeholder="From">
                                    </div>
                                    <div style="margin-top: 5px">
                                        <input type="text" class="form-control" id="highprice" placeholder="To">
                                    </div>
                                    <div style="margin-top: 5px">
                                       <button style="color: var(--secondary-color)"><i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div  style="margin-top: 10px;border-bottom: 1px solid lightgrey;padding: 10px">
                                <p>Turnover</p>
                                <div>
                                    <div >
                                        <input type="text" class="form-control" id="lowprice" placeholder="From">
                                    </div>
                                    <div style="margin-top: 5px">
                                        <input type="text" class="form-control" id="highprice" placeholder="To">
                                    </div>
                                    <div style="margin-top: 5px">
                                        <button style="color: var(--secondary-color)"><i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div  style="margin-top: 10px;border-bottom: 1px solid lightgrey;padding: 10px">
                                <p>Net Profit</p>
                                <div>
                                    <div >
                                        <input type="text" class="form-control" id="lowprice" placeholder="From">
                                    </div>
                                    <div style="margin-top: 5px">
                                        <input type="text" class="form-control" id="highprice" placeholder="To">
                                    </div>
                                    <div style="margin-top: 5px">
                                        <button style="color: var(--secondary-color)"><i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-top: 10px">
                                <button class="btn btn-main" style="display: block">SEARCH</button>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-10">
                        <p>There are <span id="totalItems">0</span> Items</p>
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
            getFilteredData();
        });

        let limit = 100;
        let offsetValue = -100;

        function resetLimit(){
            limit = 100;
            offsetValue = -100;
            document.getElementById('tbodyId').innerHTML = '';
        }

        function getFilteredData(statt = -1){

            if (statt !== -1){
                resetLimit();
            }
            offsetValue = offsetValue + limit;
            let formData = new FormData();
            formData.append('limit', limit);
            formData.append('offset', offsetValue);
            formData.append('useragent',  navigator.userAgent);
            formData.append('search',  statt);

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
                colmd8.classList.add('col-md-8');

                let img = document.createElement('img');
                img.classList.add('lazy', 'img-fluid', 'wow', 'fadeIn');
                img.setAttribute('data-wow-delay', '1.25s');
                if (entries[i].photos.length > 0){
                    img.src = `{{url('')}}/get-listing-photo/${entries[i].photos[0].id}`;
                }else{
                    img.src = `{{url('')}}/defaultphoto.png`;
                }
                img.style.height = '250px';

                colmd4.appendChild(img);

                let heading = document.createElement('a');
                let description = document.createElement('p');
                let location = document.createElement('p');
                let viewMore = document.createElement('a');
                let addToFav = document.createElement('a');
                let contactSeller = document.createElement('a');
                viewMore.classList.add('btn', 'btn-main', 'viewmoreresp')
                addToFav.classList.add('btn', 'btn-main', 'marginbtnfav')
                contactSeller.classList.add('btn', 'btn-main', 'marginbtnfav')

                heading.innerText = entries[i].heading;
                description.innerText = entries[i].summary;
                location.innerText = "Location : " +entries[i].location;
                viewMore.innerHTML = '<span style="font-weight: bold;font-size: 15px">View More</span> ' + '<i class="fa fa-chevron-right"></i>';
                addToFav.innerHTML = '<span style="font-weight: bold;font-size: 15px">Add to Fav</span> ' + '<i class="fa fa-heart"></i>';
                contactSeller.innerHTML = '<span style="font-weight: bold;font-size: 15px">Contact Seller</span> ' ;

                heading.style.marginTop = '15px';
                description.style.marginTop = '8px';
                location.style.marginTop = '8px';

                heading.setAttribute('href', '#');
                viewMore.setAttribute('href', '#');
                addToFav.setAttribute('href', '#');
                contactSeller.setAttribute('href', '#');



                colmd8.appendChild(heading);
                colmd8.appendChild(description);
                colmd8.appendChild(location);
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
