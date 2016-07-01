<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>shop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

</head>
<style>
    body
    {
        font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 12px;
        background:#f5f8fa;
    }
    a{
        font-size: 12px !important;
    }

    .btn
    {
    font-size: 12px !important;
    }

    #btn-submit
    {
        border: none !important;
        background: none;
        color: #a94442;
    }
    .navbar.scroll-hide
    {
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }
    .navbar-default .navbar-nav>li>a
    {
        color:#fff;
        font-size: 12px;
    }

    .navbar.scroll-hide.closed {
        top: -50px;

    }

    fieldset.scheduler-border {
        border: 1px groove #ccc !important;
        padding: 0 1.4em 1.4em 1.4em !important;
        margin: 0 0 1.5em 0 !important;
        -webkit-box-shadow:  0px 0px 0px 0px #ccc;
        box-shadow:  0px 0px 0px 0px #ccc;
        background: #fff;
    }

    legend.scheduler-border {
        font-size: 1.0em !important;
        font-weight: bold !important;
        text-align: left !important;
        width:auto;
        padding:0 10px;
        border-bottom:none;
    }

    .table
    {
        margin-bottom: 0px !important;
    }
    .bs-callout
    {
        padding: 10px;
        margin: 20px 0;
        border: 1px solid #eee;
        border-left-width: 5px;
        border-radius: 3px;
        background: #fff;;
    }

    .bs-callout-warning
    {
        border-left-color:#aa6708;
    }

    .bs-callout-danger
    {
        border-left-color:#ce4844;
    }

    .bs-callout-danger
    {
        border-left-color: #1b809e;
    }

    .bs-callout-success
    {
        border-left-color:  #5cb85c;
    }

    .custom
    {
        border-radius: 0px !important;
        border:none !important;
        padding: 5px 10px !important;
        height: 30px !important;
    }

    .td-custom
    {
        padding: 0px !important;
    }

    .td-custom-hps
    {
        padding: 7px 0px !important;
        text-align: center;
    }

    .form-control
    {
        font-size :12px !important;
    }
    .panel-primary
    {
        border-color : #ddd !important;
    }
</style>
<body style="margin-top: 100px;">
{{-- Nav Bar --}}
<div class="navbar scroll-hide navbar-default navbar-fixed-top">
    <div class="container-fluid top-bar" style=" background:#fff; padding-top:5px; padding-bottom:5px; color:#2882b5;" >

        <div style="font-size:15px; margin-top:5px; font-weight:bold;"><h4><i>Belajar Laravel </i></h4></div>
        <!--<div style="font-size:15px; margin-top:5px; font-weight:bold;">nama</div>
        <div style="font-size:10px; font-style:italic; font-weight:bold;">$motto</div>-->

        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>


    </div>
    <div class="container-fluid main-nav clearfix" style=" background:#337ab7;">
        <div class="nav-collapse" >

            <div id="navbar" class="navbar-collapse collapse" >
                <ul class="nav navbar-nav pull-right" >
                    <li id="home"><a href="#">Dashboarbd</a></li>
                    <li id="barang" class="dropdown barang">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Data Barang <span class="caret"></span></a>
                        <ul class="dropdown-menu ">
                            <li><a href="{{url('shop')}}">Barang</a></li>
                            <li><a href="{{url('harga')}}">Harga</a></li>
                            <li><a href="#">Stock</a></li>
                        </ul>
                    </li>

                    <li id="laporan" class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Laporan <span class="caret"></span></a>
                        <ul class="dropdown-menu ">
                            <li><a href="#">Transaksi</a></li>
                            <li><a href="#">Belanja/Pengeluaran</a></li>
                            <li><a href="#">Piutang</a></li>
                            <li><a href="#">Hutang</a></li>
                            <li><a href="#">Transaksi Percustomer</a></li>
                            <li><a href="#">Neraca</a></li>
                        </ul>
                    </li>



                    <li id="customer"><a href="{{url('customer')}}">Customer</a></li>
                    <li id="vendor"><a href="{{url('vendor')}}">Vendor</a></li>
                    <li id="vendor"><a href="{{url('penerimaan')}}">Penerimaan</a></li>
                    <li id="Transaksi"><a id="#">Transaksi</a></li>

                </ul>

            </div>

            </ul>
        </div>
    </div>
</div>
{{-- akhir navbar --}}

<div class="container-fluid">
    @yield('content')
</div>
</body>
</html>
<script type="text/javascript">
    $(function() {
        //Javascript
         $( ".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });

        $('.input-kode').keyup(function(e){
            if(e.keyCode == 13)
            {
                var kode = $(this).val();
                //$(this).trigger("enterKey");
                $.ajax({
                    type    : "GET",
                    url     : "{{URL('search/databarang?kode=')}}"+kode,
                success:function (data){

                    if(data.length == 0)
                    {
                     alert('Data Dengan Barcode '+kode+' Tidak Ada');
                    }
                    else {
                        addrow(data);
                    }
                }
                })
            }
        });


        autocomplete();


        $(".navbar.scroll-hide").mouseover(function() {
            $(".navbar.scroll-hide").removeClass("closed");
            return setTimeout((function() {
                return $(".navbar.scroll-hide").css({
                    overflow: "visible",

                });
            }), 150);
        });


        var delta, lastScrollTop;
        lastScrollTop = 0;
        delta = 50;
        return $(window).scroll(function(event) {
            var st;
            st = $(this).scrollTop();
            if (Math.abs(lastScrollTop - st) <= delta) {
                return;
            }
            if (st > lastScrollTop) {
                $('.navbar.scroll-hide').addClass("closed");
            } else {
                $('.navbar.scroll-hide').removeClass("closed");
            }
            return lastScrollTop = st;
        });
    });

    function addrow(d)
    {
        if(d == ''){
         var nama = '';
        }
        else {
            var nama = d[0].value;
        }
        var len = ($('#tb_penerimaan tr').length);
        $(".tb_body")
                .append($('<tr>')
                        .attr('id','col-'+len)
                        .append($('<td>')
                                .attr('class','td-custom')
                                .append('{!! Form::text('nama_barang[]',null,['class'=>'form-control custom nama_barang']) !!}'))
                                .append($('<td>')
                                        .attr('class','td-custom')
                                        .append('{!! Form::text('jumlah[]',null,['class'=>'form-control custom jumlah']) !!}')
                                )
                                        .append($('<td>')
                                                .attr('class','td-custom')
                                                .append('{!! Form::text('unit[]',null,['class'=>'form-control custom']) !!}')
                                        )
                                                .append($('<td>')
                                                        .attr('class','td-custom')
                                                        .append('{!! Form::text('harga[]',null,['class'=>'form-control custom']) !!}')
                                                )
                                                        .append($('<td>')
                                                                .attr('class','td-custom')
                                                                .append('{!! Form::text('total[]',null,['class'=>'form-control custom','readonly'=>'readonly']) !!}')
                                                        )
                                                            .append($('<td>')
                                                                    .attr('class','td-custom-hps')
                                                                    .append("<a onclick='hapus-"+len+"'>Hapus</a>" )
                                                                    )

                );
        $('#col-'+len+' .nama_barang').val(nama);
        if(d == ''){
            $('#col-'+len+' .nama_barang').focus();
        }
        else
        {
            $('#col-'+len+' .jumlah').focus();
        }
        $('.input-kode').val('');

        $('#col-'+len+' .jumlah').keyup(function(e) {
            if (e.keyCode == 13) {
                $('.input-kode').focus();
            }
        });

        autocomplete(len);
    }

    function focusjumlah(len)
    {
        $('#col-'+len+' .nama_barang').keyup(function(e) {
            if (e.keyCode == 13) {
                $('#col-'+len+' .jumlah').focus();
            }
        });
    }

    function autocomplete(idx)
    {
        if(idx == '')
        {
            idx = 0
        }

        $( "#col-"+idx+" .nama_barang" ).autocomplete({
            source: "{{URL('search/autocomplete')}}",
            minLength: 3,
            select: function(event, ui) {
                //$('#col-'+idx+' .jumlah').focus();
                focusjumlah(idx);
                $("#col-"+idx+" .nama_barang").val(ui.item.value);
            }
        });
    }
</script>
