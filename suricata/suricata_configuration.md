🔧 Configuring Suricata for Signature-Based Detection
Step 1: Edit Suricata Configuration File

Open the Suricata configuration file:

sudo nano /etc/suricata/suricata.yaml

Step 2: Configure HOME_NET

Set the internal and DMZ networks so Suricata knows which networks it should protect and monitor:

HOME_NET: "[192.168.10.0/24,192.168.20.0/24]"


Explanation:

192.168.10.0/24 → DMZ network

192.168.20.0/24 → Internal network

This ensures attack signatures (Nmap, OWASP, DoS) correctly trigger when traffic targets protected networks.

Step 3: Configure af-packet Capture Mode

Scroll to the Linux high-speed capture support section and configure af-packet.

Example configuration:

af-packet:
  - interface: ens33
    cluster-id: 99
    cluster-type: cluster_flow
    defrag: yes

  - interface: ens36
    cluster-id: 98
    cluster-type: cluster_flow
    defrag: yes


Explanation:

interface → Network interfaces Suricata listens on

Multiple interfaces can be added if Suricata monitors more than one network

cluster_flow ensures packets of the same flow are processed together

defrag: yes enables packet reassembly for accurate detection

⚠️ Replace ens33, ens36 with the actual interface names on your system (ip a to verify).

Step 4: Ensure Rule Files Are Enabled

Verify that Suricata is loading the Emerging Threats rule set:

default-rule-path: /etc/suricata/rules

rule-files:
  - suricata.rules

Step 5: Test Configuration

Before restarting Suricata, validate the configuration:

sudo suricata -T -c /etc/suricata/suricata.yaml


You should see:

Configuration provided was successfully loaded.

Step 6: Restart Suricata

Apply the changes:

sudo systemctl restart suricata