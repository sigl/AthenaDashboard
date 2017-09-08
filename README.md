# AthenaDashboard
The quick and dirty implementation of a dashboard for my homelab. Code quality is certainly not ideal (this entire thing was completed in under two hours), and most components are hardcoded, but feel free to poke around to see how it works!

## Quick tips!
* The `UI-ServerHosted` directory contains the code for the actual dashboard itself. This should be hosted on a local server somewhere.
* The `MikrotikMiddleware` directory contains the PHP code that acts as a "bridge" between MikroTik's routerOS APIs and the dashboard.
* The `UI-ElectronApp` directory contains the JS code (and a simple HTML view) that could be packaged for a nice desktop app.
