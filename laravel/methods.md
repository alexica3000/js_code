- Find related IDs on a BelongsToMany Relationship
```
$user->roles()->allRelatedIds()->toArray();
```

- Model Keys
```
User::all()->pluck('id')->toArray();

// In most cases, however, this can be shortened. Like this:

User::all()->modelKeys();
```

- throw_if()

```
throw_if(
    !Hash::check($data['current_password'], $user->password),
    new Exception(__('That is not your old password.'))
);
```

- Request exists() vs has()
```
// http://example.com?popular

$request->exists('popular') // true
$request->has('popular') // false

http://example.com?popular=foo

$request->exists('popular') // true
$request->has('popular') // true
```

- @forelse

```
@forelse ($users as $user)
    {{ $user->name }}
@empty
    <p>No Users</p>
@endforelse
```

- optional()

```
// User 1 exists, with account
$user1 = User::find(1);
$accountId = $user1->account->id; // 123

// User 2 exists, without account
$user2 = User::find(2);
$accountId = $user2->account->id; // PHP Error: Trying to get property of non-object

// Fix without optional()
$accountId = $user2->account ? $user2->account->id : null; // null
$accountId = $user2->account->id ?? null; // null

// Fix with optional()
$accountId = optional($user2->account)->id; // null
```
