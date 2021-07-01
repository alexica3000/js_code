## Create new laravel project via docker with one line

```
% docker run --rm -i -t -v $PWD:/app composer create-project --prefer-dist laravel/laravel (YOUR PROJECT NAME HERE)
```

- `- i` and `-t` is not requirement, it's just a prettier.
- also `--rm` too, it's to remove unnecessary containers.

### requirements

- installed docker(ex. Docker desktop for mac, windows or just Docker for linux)

### What's doing this command?


1. Fetch composer(latest) image from docker hub.(https://hub.docker.com/_/composer)
2. Mount $PWD path of host to /app of container directory.
3. Run `create-project --prefer-dist laravel/laravel (YOUR PROJECT NAME HERE)` in fetched container.
4. Finally, you can see laravel project files in (YOUR PROJECT NAME HERE) directory.

### Why mount `/app` directory?

The /app directory is specified working directory, from composer image via https://github.com/composer/docker/blob/582c6f4e10b6b8fbf9bc1c5b02d6ec24694fe8d4/2.0/Dockerfile#L60.

So, if composer's Dockerfile updated, then we must change mount directory path.

### Specific version for laravel

If you want use specific version laravel, then you can use `"laravel/laravel=6.*"` statement in your command.
