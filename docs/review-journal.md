# Review Journal

The repository goal stays the same: implement a PHP security tooling project for webhook format conversion, using round-trip fixtures and lossless normalization checks. This note explains the added review angle.

The local checks classify each case as `ship`, `watch`, or `hold`. That gives the project a small review vocabulary that matches its security tooling focus without claiming live deployment or external usage.

## Cases

- `baseline`: `trust boundary`, score 150, lane `ship`
- `stress`: `claim drift`, score 212, lane `ship`
- `edge`: `replay exposure`, score 186, lane `ship`
- `recovery`: `policy width`, score 233, lane `ship`
- `stale`: `trust boundary`, score 209, lane `ship`

## Note

This file is intentionally plain so the fixture remains the source of truth.
