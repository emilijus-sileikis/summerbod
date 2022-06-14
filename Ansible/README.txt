If the script permissions are wrong:

- For some reason sometimes the files 'lose' their permissions.
- Cloning the repo directly from git should fix this issue:
git clone -b stable https://git.mif.vu.lt/emsi7726/summerbod/

Compatibility:

- The script is intendent to work only on Linux enivornments (that support required resources).
- Tested only on Debian 11 so far.
- Does not work on MAC (does not meet the Prerequisites).
- Works on Windows Linux Subsystem (Debian 11).

Prerequisites:

- Linux environment (Debian 11 adviced).
- Opennebula tools (with CLI) installed on the system.
- Ansible installed on the system.
- SSH working properly.
- SCP working properly.
- Access to the MIF environment (Opennebula mainly).

Requirements:

- The project folder should be at the users home directory (though it should work in others
as well for example Downloads folder).
- Current user must have root permissions (script requires BECOME password).
- At least 0.5 of free CPU in MIF Opennebula.
- At least 3 of free VCPU in MIF Opennebula.
- At least 3GB of free RAM in MIF Opennebula.
- At least 18GB of free storage space in MIF Opennebula.

Information:

- To launch the script use the launch.sh file (./summerbod/Ansible/launch.sh).
- In the current state of the script, it downloads an Ansible role to your local system (proceed if
you agree with that).
- The script is not perfect by any means, sorry if any errors occur :).