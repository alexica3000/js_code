### escaping
```
$links = $pages
    ->map(fn ($page) => "<a href=\"{$page->url}\">{$user->first_name}</a>")
    ->join(', ', ' and ');
    
    // e($value)
    // Illuminate\Support\HtmlString
    
$links = new HtmlString($links);

// Template
<div>
    {{ $links }}
</div>
```
