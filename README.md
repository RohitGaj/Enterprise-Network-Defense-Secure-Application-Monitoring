# Enterprise Network Defense & Secure Application Monitoring

## Overview
This project demonstrates an enterprise-style network defense architecture based on
Network Defense Concepts (NDC). It implements network segmentation using a DMZ and
internal network, intrusion detection with Suricata, and centralized monitoring with
Wazuh SIEM.

The goal is to detect and monitor real-world network and web-based attacks while
protecting sensitive internal data.

## Architecture
The environment is divided into multiple security zones:
- **External Network** – attacker simulation (Kali Linux)
- **DMZ Network** – public-facing web application
- **Internal Network** – secure database and sensitive data
- **Security Zone** – Suricata IDS and Wazuh SIEM

Only restricted and firewall-approved communication is allowed between zones.

## Tools & Technologies
- Suricata IDS (network intrusion detection)
- Wazuh SIEM (log collection, correlation, alerting)
- iptables (firewall enforcement)
- Apache / Web Application (DMZ)
- MySQL / MariaDB (Internal storage)
- Kali Linux (attack simulation)
- TLS / Encryption (secure communication)

## Attacks Detected
- Nmap port scanning
- SSH brute-force attacks
- SQL Injection
- Cross-Site Scripting (XSS)
- DoS / DDoS traffic patterns

## Monitoring & Detection
- Suricata detects malicious traffic using signature-based rules
- Alerts are written to JSON logs
- Wazuh agents collect IDS, system, and application logs
- Wazuh correlates events and displays alerts in a SOC-style dashboard

## Key Security Concepts Demonstrated
- Defense-in-depth
- Network segmentation (DMZ vs Internal)
- IDS + SIEM integration
- Centralized visibility
- Encryption at rest and in transit

## Screenshots & Evidence
- Wazuh dashboard screenshots

<img width="1911" height="911" alt="Screenshot 2026-02-04 141654" src="https://github.com/user-attachments/assets/2f0d677f-7edb-422f-90b2-01c2aa78bb7a" />

<img width="922" height="206" alt="Screenshot 2026-02-04 143654" src="https://github.com/user-attachments/assets/eb26f201-65af-45e8-9079-dfffd4b113b8" />

<img width="919" height="103" alt="Screenshot 2026-02-04 143631" src="https://github.com/user-attachments/assets/ea950bab-56b3-4a57-8f03-1c0cdd6b1656" />

- Nmap scan detection

<img width="552" height="232" alt="Screenshot 2026-02-04 142227" src="https://github.com/user-attachments/assets/9957b698-4dfc-4e5f-ae5f-f3273331e470" />

<img width="930" height="840" alt="Screenshot 2026-02-02 193837" src="https://github.com/user-attachments/assets/8fbcef8f-30b8-4af0-b84c-351bbbdeaaf1" />

- Brute-force alerts

<img width="1266" height="214" alt="Screenshot 2026-02-04 142202" src="https://github.com/user-attachments/assets/04e77636-6988-4d2a-94ba-2109e16c3ed0" />

<img width="928" height="855" alt="Screenshot 2026-02-04 143729" src="https://github.com/user-attachments/assets/866bee06-5252-4796-a8de-b46b54a12146" />

<img width="779" height="218" alt="Screenshot 2026-02-04 142635" src="https://github.com/user-attachments/assets/ded4e1c6-5c45-4132-87d2-d41da195b7dd" />


## Full Project Report
A detailed academic report describing design, implementation, and results is available:
- **Group08_REPORT_Kunjan_18_Rohit_29.pdf**
