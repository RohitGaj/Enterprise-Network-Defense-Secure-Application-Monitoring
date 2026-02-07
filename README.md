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
See the `evidence/` directory for:
- Nmap scan detection
- Brute-force alerts
- Wazuh dashboard screenshots

- <img width="1911" height="911" alt="Screenshot 2026-02-04 141654" src="https://github.com/user-attachments/assets/2f0d677f-7edb-422f-90b2-01c2aa78bb7a" />


## Full Project Report
A detailed academic report describing design, implementation, and results is available:
- **Group08_REPORT_Kunjan_18_Rohit_29.pdf**

