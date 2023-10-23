<div>
    <h1>{{__('products.mail.subject', ['name' => $product->name])}}</h1>
    <p>{{__('products.mail.who_created', ['user' => $user->name])}}</p>
    <p>{{__('products.table.article')}}: {{$product->article}}</p>
    <p>{{__('products.table.status.text')}}: {{\App\Enum\ProductStatuses::getStatusLang($product->status)}}</p>
    <p>{{__('products.mail.date', ['date' => $product->created_at->format('d.m.Y h:i')])}}</p>
</div>
