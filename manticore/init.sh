#!/bin/bash

sudo mkdir -p /var/log/manticore
sudo chown -R manticore:manticore /var/run/manticore /var/lib/manticore /var/log/manticore /home/manticore/

searchd --config /etc/manticoresearch/manticore.conf && indexer --rotate --all


printf '\n\nPrepare environment - Done!\n\n'


/bin/bash
