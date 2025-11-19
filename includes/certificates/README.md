# M-Pesa Certificates

This directory contains M-Pesa API certificates for encrypting credentials.

## Directory Structure

```
certificates/
├── sandbox/
│   └── cert.cer
└── live/
    └── cert.cer
```

## Obtaining Certificates

### Sandbox Certificate

Download from: https://developer.safaricom.co.ke/

The sandbox certificate is typically included in the API documentation.

### Live Certificate

Contact Safaricom API support to get your production certificate:
- Email: apisupport@safaricom.co.ke
- Developer Portal: https://developer.safaricom.co.ke/

## Installation

1. Download the certificate file (`.cer` format)
2. Place in the appropriate directory:
   - Sandbox: `sandbox/cert.cer`
   - Live: `live/cert.cer`
3. Ensure file permissions are restrictive:
   ```bash
   chmod 600 sandbox/cert.cer
   chmod 600 live/cert.cer
   ```

## Usage

The plugin automatically uses these certificates to encrypt the initiator password for:
- Transaction reversals
- B2C transactions
- Account balance queries

## Security

- Never commit these certificates to version control
- Keep certificates in a secure location
- Regularly update certificates as required
- Restrict file access to web server user only

## Verification

To verify your certificate is valid:

```bash
openssl x509 -in sandbox/cert.cer -text -noout
```

This should display the certificate details.

## Troubleshooting

### Error: Certificate file not found
- Ensure the file exists in the correct directory
- Check file name is exactly `cert.cer`
- Verify file permissions

### Error: Could not encrypt password
- Verify certificate format is correct
- Ensure OpenSSL is installed on server
- Check certificate is not expired
- Confirm using the correct certificate for environment

## Support

For certificate-related issues, contact:
- Safaricom API Support: apisupport@safaricom.co.ke
- Plugin Support: support@yourcompany.com

