#!/usr/bin/env python

import os

from fabric.utils import abort
from fabric.contrib.project import rsync_project
from fabric.api import env, local, task, hosts, runs_once, lcd, hide
from fabric.context_managers import settings

env.hosts = ['nfs_whatdayoftheweek', ]
env.use_ssh_config = True


@task
@hosts('nfs_whatdayoftheweek')
def deploy():
    rsync_project(
        local_dir='./source/',
        remote_dir='/home/public/',
        delete=False,
        extra_opts='--exclude=".DS_Store"'
    )
