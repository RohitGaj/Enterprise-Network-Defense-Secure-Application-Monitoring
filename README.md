# Enterprise Network Defense using NDC, IDS & SIEM

This project demonstrates an enterprise-style network defense architecture using
DMZ segmentation, Suricata IDS, and Wazuh SIEM. It detects network attacks,
OWASP Top 10 web attacks, and DoS/DDoS activity using signature-based detection
and centralized monitoring.

## Architecture
- DMZ-based web application
- Internal encrypted data storage
- Suricata for intrusion detection
- Wazuh for SIEM monitoring

## Key Features
- Network segmentation (DMZ & Internal)
- Signature-based attack detection
- OWASP Top 10 monitoring
- Centralized alerts and logs
- Encryption at rest and in transit

## Tools Used
- Suricata
- Wazuh
- iptables / UFW
- Apache / Flask
- Kali Linux
