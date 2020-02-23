@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card bg-grey">
                <div class="card-header text-center bg-primary text-white"><h3>ড্যাশবোর্ড</h3></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="">
                        <div class="row text-center">
                            <div class="col-lg-4 col-md-4">
                                <div class="card">
                                    <div class="card-header bg-primary text-white"><h5>{{"মোট অভিযোগ"}}</h5></div>
                                    <h1 class="mt-3">{{ "৮" }}</h1>
                                    <button class="btn btn-block btn-outline-info text-dark"><a href="#"></a><strong>আরও জানুন</strong></button>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                    <div class="card">
                                        <div class="card-header bg-primary text-white"> <h5>{{"মোট উত্তর"}}</h5></div>
                                        <h1 class="mt-3">{{ "৩" }}</h1>
                                        <button class="btn btn-block btn-outline-info text-dark"><a href="#"></a><strong>আরও জানুন</strong></button>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-header bg-primary text-white"><h5>{{"অভিযোগ ড্রাফ্‌ট"}}</h5></div>
                                    <h1 class="mt-3">{{ "১৩" }}</h1>
                                    <button class="btn btn-block btn-outline-info text-dark"><a href="#"></a><strong>আরও জানুন</strong></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header bg-danger text-center text-white"><h3>নোটিশ সমূহ</h3></div>
                                    <p class="container mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem, iure ea? Non corporis quae necessitatibus natus, ullam assumenda animi sapiente quasi voluptates error, id quam aspernatur modi nulla iusto ratione fugiat. Pariatur aut voluptatibus accusantium aliquid dolores dolorem consequatur dolorum laboriosam molestias consectetur nesciunt quas in quaerat esse cupiditate, fugiat officiis? Consectetur eos suscipit deserunt deleniti aut excepturi cum repellat quae. Amet illum atque vero, blanditiis quam nemo nisi fugit non sequi quae dolorem quos reiciendis libero aut aliquid sapiente sunt dolor hic! Praesentium libero ducimus temporibus ipsum suscipit fugiat assumenda quia velit numquam in, quaerat nesciunt ut molestias, totam error quod eveniet odit sit commodi delectus non consequatur perspiciatis. Corrupti magni deserunt cumque! Veniam voluptatem qui non sapiente quasi quibusdam quas possimus. Corrupti quasi, molestiae, sit temporibus minima quas, nulla ab consequuntur eum delectus soluta earum a similique quibusdam eos blanditiis recusandae accusantium quo vitae optio dignissimos id nemo hic necessitatibus. Facilis asperiores dolorum vero ipsa dicta non, veritatis fugit nobis nulla, officia quia minus aliquid voluptatum sit itaque in architecto similique, vel aut ipsum quasi. Recusandae ipsam doloremque mollitia voluptatum, ut vel minus eum ducimus quo labore harum delectus iste, consequuntur reiciendis qui blanditiis neque similique? Itaque consequuntur delectus vero exercitationem vitae ipsum aut pariatur repudiandae, autem temporibus at quam facilis iure explicabo accusantium asperiores reiciendis dolorem, corrupti placeat voluptate? Exercitationem officiis tempore repellendus? Voluptates deserunt nisi exercitationem obcaecati dolores. Deleniti quis dolor aut. Necessitatibus eligendi est pariatur a, ea quaerat tempore maxime magni natus expedita quisquam sint doloribus quae ex harum, deserunt molestias laudantium provident distinctio molestiae dicta accusamus. Non, eum dolores quibusdam harum perferendis deserunt ipsam. Ab natus, cumque perferendis porro, quisquam non, expedita libero neque enim sit aperiam fugit suscipit! Sed earum eius recusandae blanditiis esse rem tempore repellat. Quis ut nihil quibusdam, reiciendis iste dolor ipsum dignissimos laudantium accusantium quae ipsa quia magni, eius odit. Voluptate, accusantium ipsa? Magnam veritatis molestiae provident mollitia cumque vitae, labore quam excepturi ut, maiores debitis ratione aspernatur! Laudantium ex accusamus, unde quaerat illo dolorum dolores modi quisquam harum optio dolore sapiente corrupti, expedita quae. Sapiente optio quis repudiandae aut sunt molestiae iste illo quam quasi aliquid voluptates suscipit, laudantium earum. Ad obcaecati minima tenetur exercitationem commodi. Aspernatur ea libero, qui facilis in quidem quo dolor?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
