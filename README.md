Debug Extension
===============

![CI](https://github.com/phpactor/debug-extension/workflows/CI/badge.svg)


Extension to help in debugging Phpactor

## VarDumper

Includes the Symfony `var-dumper`. Run a `var-dump` server:

```
$ ./vendor/bin/var-dump-server localhost:9912
```

Use the `dump()` function to dump to the var-dump-server.
