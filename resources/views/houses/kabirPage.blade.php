@extends('houses.voteTemplate')
@section('houseBoyPrefects')
<div><input type="radio"id="house_boy_sourabh"name="houseBoy"value="Sourabh"onclick="writeHouseBoy(this)"reqired><label for="house_boy_sourabh">Sourabh</label></div><br><div><input type="radio"id="house_boy_keshav"name="houseBoy"value="Keshav"onclick="writeHouseBoy(this)"><label for="house_boy_keshav">Keshav</label></div><br><div><input type="radio"id="house_boy_abhishek"name="houseBoy"value="Abhishek"onclick="writeHouseBoy(this)"><label for="house_boy_abhishek">Abhishek</label></div><br><div><input type="radio"id="house_boy_manav"name="houseBoy"value="Manav"onclick="writeHouseBoy(this)"><label for="house_boy_manav">Manav</label></div><br>
@endsection()

@section('houseGirlPrefects')
<div>
    <input type="radio" id="house_girl_kashish" name="houseGirl" value="Kashish" onclick="writeHouseGirl(this)" required>
    <label for="house_girl_kashish"> Kashish </label>
</div>
<br>

<div>
    <input type="radio" id="house_girl_meera" name="houseGirl" value="Meera" onclick="writeHouseGirl(this)">
    <label for="house_girl_meera"> Meera </label>
</div>
<br>

<div>
    <input type="radio" id="house_girl_bulbul" name="houseGirl" value="Bulbul" onclick="writeHouseGirl(this)">
    <label for="house_girl_bulbul"> Bulbul </label>
</div>
<br>

<div>
    <input type="radio" id="house_girl_mokshita" name="houseGirl" value="Mokshita" onclick="writeHouseGirl(this)">
    <label for="house_girl_mokshita"> This is a 32 character long name </label>
</div>
<br>
@endsection()

@section('sportsBoyPrefect')
<div>
    <input type="radio" id="sports_boy_ram" name="sportsBoy" value="Ram" onclick="writeSportsBoy(this)" required>
    <label for="sports_boy_ram"> Ram</label>
</div>
<br>

<div>
    <input type="radio" id="sports_boy_shyam" name="sportsBoy" value="Shyam" onclick="writeSportsBoy(this)">
    <label for="sports_boy_shyam"> Shyam</label>
</div>
<br>

<div>
    <input type="radio" id="sports_boy_soham" name="sportsBoy" value="Soham" onclick="writeSportsBoy(this)">
    <label for="sports_boy_soham"> Soham</label>
</div>
<br>

<div>
    <input type="radio" id="sports_boy_mohan" name="sportsBoy" value="Mohan" onclick="writeSportsBoy(this)">
    <label for="sports_boy_mohan"> Mohan </label>
</div>
<br>
@endsection()

@section('sportsGirlPrefect')
<div>
    <input type="radio" id="sports_girl_radhika" name="sportsGirl" value="Radhika" onclick="writeSportsGirl(this)" required>
    <label for="sports_girl_radhika"> Radhika </label>
</div>
<br>

<div>
    <input type="radio" id="sports_girl_shruti" name="sportsGirl" value="Shruti" onclick="writeSportsGirl(this)">
    <label for="sports_girl_shruti"> Shruti </label>
</div>
<br>

<div>
    <input type="radio" id="sports_girl_ritika" name="sportsGirl" value="Ritika" onclick="writeSportsGirl(this)">
    <label for="sports_girl_ritika"> Ritika </label>
</div>
<br>

<div>
    <input type="radio" id="sports_girl_tanya" name="sportsGirl" value="Tanya" onclick="writeSportsGirl(this)">
    <label for="sports_girl_tanya"> Tanya </label>
</div>
<br>
@endsection()

@section('letHouse')
    <script type="text/javascript">let house="kabir"</script>
@endsection()
