import os

from fabric.api import abort, cd, env, run, task
from fabric.contrib.project import rsync_project

env.hosts = ['nfs-myles-whatdayoftheweek']
env.use_ssh_config = True
env.path = '/home/public'

@task
def deploy():
  rsync_project(
    local_dir="site/",
    remote_dir=env.path,
    delete=True,
    extra_opts='--exclude=".DS_Store"'
  )
