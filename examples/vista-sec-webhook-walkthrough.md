# Vista Sec Webhook Field Walkthrough

This note is the quickest way to read the extra review model in `vista-sec-webhook-field`.

| Case | Focus | Score | Lane |
| --- | --- | ---: | --- |
| baseline | trust boundary | 150 | ship |
| stress | claim drift | 212 | ship |
| edge | replay exposure | 186 | ship |
| recovery | policy width | 233 | ship |
| stale | trust boundary | 209 | ship |

Start with `recovery` and `baseline`. They create the widest contrast in this repository's fixture set, which makes them better review anchors than the middle cases.

`recovery` is the optimistic case; use it to make sure the scoring path still rewards strong signal.
