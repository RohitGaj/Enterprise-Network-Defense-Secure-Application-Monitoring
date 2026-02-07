# Project Architecture

This project follows an enterprise-style layered security architecture
based on Network Defense Concepts (NDC).

## Network Segmentation
The environment is divided into multiple security zones:

- **External Network**
  - Kali Linux (attack simulation)

- **DMZ Network (192.168.10.0/24)**
  - Web application (HTTP/HTTPS)
  - Fail2Ban for SSH protection
  - Restricted inbound and outbound access

- **Internal Network (192.168.20.0/24)**
  - Encrypted database / secure storage
  - No direct internet access
  - Accessible only from DMZ on required ports

- **Security Monitoring Zone**
  - Suricata IDS (network traffic inspection)
  - Wazuh Manager & Dashboard (SIEM)

## Traffic Flow
1. User or attacker accesses the web application in the DMZ
2. DMZ forwards validated and encrypted data to the internal server
3. Suricata monitors network traffic for attacks
4. Wazuh agents collect logs from DMZ, Internal, and IDS machines
5. Wazuh SIEM correlates events and generates alerts

## Security Controls
- Network segmentation (DMZ vs Internal)
- Default-deny firewall rules
- Intrusion detection using Suricata
- Centralized monitoring using Wazuh SIEM
- SSH brute-force protection using Fail2Ban
- Encryption of sensitive data at rest and in transit

## Architecture Diagram