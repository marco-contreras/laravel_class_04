<label for="name">
    Name:
    <input class="form-control" type="text" name="name" value="{{ $contact->name ?? '' }}">
</label><br>

<label for="lastName">
    Last Name:
    <input class="form-control" type="text" name="last_name" value="{{ $contact->last_name ?? '' }}">
</label><br>

<label for="nickname">
    Nickname:
    <input class="form-control" type="text" name="nickname" value="{{ $contact->nickname ?? '' }}">
</label><br>

<label for="ralationship">
    Relationship:
    <input class="form-control" type="text" name="relationship" value="{{ $contact->relationship or '' }}">
</label><br>

<label for="cellphone">
    Cellphone:
    <input class="form-control" type="number" name="cellphone" value="{{ $contact->cellphone or '' }}">
</label><br>

<label for="email">
    Email:
    <input class="form-control" type="email" name="email" value="{{ $contact->email or '' }}">
</label><br><br>