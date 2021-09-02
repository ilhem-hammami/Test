@extends('layouts.app')

@section('content')
<div class="row" style="width:600px;">
 <div class="col-md-12">
   <h4><font color="orange"><b> Ajouter une Spécialité </b></font></h4>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('Spécialités.store') }}">
          @csrf
		  
		<div class="row">
			<div class="col-md-6 ">
					<div class="form-group">
						<label for="nom">Nom:</label>
						<input type="text" class="form-control" name="nom"/>
					</div>
					<div class="form-group">
						<label for="date">Date pub jort:</label>
						<input type="date" class="form-control" name="date"/>
					</div>
			</div>
			<div class="col-md-6 ">
				<div class="form-group">
					<label for="nbr_inscrit">Nombre d'inscription:</label>
					<input type="text" class="form-control" name="CIN"/>
				</div>
				<div class="form-group">
					<label for="type">Type:</label>
					<input type="text" class="form-control" name="type"/>
				</div>  
                <div class="form-group">
					<label for="charge_hebdo_totale">Charge hebdo totale:</label>
					<input type="number" class="form-control" name="charge_hebdo_totale"/>
				</div>
                <div class="form-group">
					<label for="charge_hebdo_théorie">Charge hebdo téorie:</label>
					<input type="number" class="form-control" name="charge_hebdo_téorie"/>
				</div>
                <div class="form-group">
					<label for="charge_hebdo_pratique">Charge hebdo pratique:</label>
					<input type="number" class="form-control" name="charge_hebdo_pratique"/>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="card">
				          <button type="submit" class="btn btn-primary">Ajouter la spécialité</button>
				</div>
			</div>
		</div>

      </form>
  </div>
</div>
</div>
@endsection