# Manticoresearch issue 802

Reproduce [issue](https://github.com/manticoresoftware/manticoresearch/issues/802)

## Reproduce
Run
```
docker-composer up -d
```

Wait until indexer data is generated, there should be error message
```
docker logs manticore_bug_802
```

