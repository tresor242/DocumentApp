<div class="page-section mt-5">
    <div class="container">
        <div class="row">

        <div class="col-md-6 offset-3">
      <h1 class="text-center wow fadeInUp">Faire une demande</h1>

      <form class="main-form" action="{{url('add_demande')}}"  method="POST">

        @csrf
        <div class="row mt-5 ">
          
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="type" id="departement" class="custom-select">
              <option value="general">---Documents---</option>
                @foreach($document as $document)
                <option value="{{$document->nom }} "> {{$document->nom }} </option>
                @endforeach
              
            </select>
          </div>
          
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div>
</div>
</div>
  </div>